(function() {
  var current_report_id;

  Mousetrap.bind(['ctrl+c', 'command+c'], function(e) {
    $("input[name=checkin]").next('span.switchery').click();
    return false;
  });

  Mousetrap.bind(['ctrl', 'command'], function(e) {
    $("[rel=tooltip][key^=command]").mouseenter();
    return false;
  }, 'keydown');

  Mousetrap.bind(['ctrl', 'command'], function(e) {
    $("[rel=tooltip][key^=command]").mouseleave();
    return false;
  }, 'keyup');

  Mousetrap.bind('d', function(e) {
    $('.active .do').get(0).click();
    return false;
  });

  current_report_id = null;

  $('#error-modal').on('shown.bs.modal', function(e) {
    var dom, scr_id;
    $('td.action').click(function(e) {
      $('#error-form')[0].reset();
      $('#error-form').find('input').trigger('change');
      return $(this).unbind(e);
    });
    dom = $(this);
    scr_id = $(e.relatedTarget).closest('tr').attr('data-screenshot-id');
    if (current_report_id && current_report_id !== scr_id) {
      $(this).find('input[type=radio][value=Yes]').prop('checked', false);
      $(this).find('input[type=radio][value=No]').prop('checked', true);
      $(this).find('#is_error_details input[type=checkbox]').prop('checked', false);
      $(this).find('#is_error_details').hide();
    }
    current_report_id = scr_id;
    $.ajax('/api/screenshots/' + scr_id + '/details', {
      async: false,
      data: {},
      dataType: 'json',
      success: function(resp) {
        var scr;
        if (resp.status) {
          scr = resp.data.screenshot;
          dom.find("#scr-img").attr('src', scr.image_url);
          dom.find("input[name=store]").val(scr.store);
          dom.find("input[name=site]").val(scr.site);
          dom.find("input[name=title]").val(scr.title);
          dom.find("input[name=price]").val(scr.price);
          dom.find("input[name=link]").val(scr.link.url);
          dom.find("#lnk-img").attr('src', scr.link.image_url);
          return dom.find("input[name=screenshot_id]").val(scr_id);
        }
      }
    });
    return true;
  });

  $('#error-form').submit(function(e) {
    var data;
    e.preventDefault();
    data = $(this).serializeArray();
    $.ajax({
      url: '/api/screenshots/mark_as_error',
      type: 'POST',
      data: data,
      success: function(resp) {
        if (resp.status) {
          $('#error-modal').modal('hide');
          $('tr[data-screenshot-id=' + data[data.length - 1].value + ']').hide();
          return $('#report-error-modal').modal();
        }
      }
    });
    return false;
  });

  $('input[name=is_error]').change(function() {
    if ($(this).val() === 'Yes') {
      $('#is_error_details').show();
      return $('#submit_report').prop('disabled', false);
    } else {
      $('#is_error_details').hide();
      return $('#submit_report').prop('disabled', true);
    }
  });

  $('#not_product').change(function() {
    return $('#product_details').toggle(!this.checked);
  });

}).call(this);
