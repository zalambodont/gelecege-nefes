$(document).ready(function () {

  $(document).on("click", "#breath-map path", function () {
    const parent = $(this).parent();
      const className = $(parent).attr('class');
      const target = $(parent).attr('data-target');
      const completed = $(parent).attr('data-completed');
      const name = $(parent).attr('data-name');
      const percent = $(parent).attr('data-percent');
      const id = $(parent).attr('data-id');
      const valuekey = parseInt($(parent).attr('data-valuekey'), 10);
      const url = 'a/img/provinces/' + id + '.svg'

      $('#province-detail .turkey').html(name)
      $('#province-detail .target').html(target)
      $('#province-detail .completed').html(completed)
      $('#province-detail .percent strong').html(percent)
      $('#province-detail .target').html(target)
      $('#province-detail figure').attr('class', className);
      $('#province-detail figure').html('')
      $('#province-detail figure').prepend('<img src="' + url + '" />')
      var $img = jQuery('#detail figure img');

      jQuery.get(url, function (data) {
        var $svg = jQuery(data).find('svg');
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);
        if (valuekey === 100) {
          $('#province-detail figure').append('<img src="a/img/tree.svg" class="tree" />')
        }
      }, 'xml');
      if ($('.initial').length) {
        $('.initial').removeClass('initial')
        console.log('labada')
        setTimeout(() => {
          $('#top-5').show()
          $('#province-detail').show()
          $('#form').hide()
          $('#detail').show()
        }, 300);
      } else {
        $('#province-detail').show()
        $('#form').hide()
        $('#detail').show()
      }
  });


  $.get('a/js/data.json',
    function (data, textStatus, jqXHR) {
      const province = data.places
      $.each(province, function (key, value) {
        $('[data-id=' + key + ']').attr('class', 'percent-' + value.percent);
        $('[data-id=' + key + ']').attr('data-target', value.target)
        $('[data-id=' + key + ']').attr('data-completed', value.completed)
        $('[data-id=' + key + ']').attr('data-percent', '%' + value.percent)
        $('[data-id=' + key + ']').attr('data-valuekey', value.percent)
      });
      $('#target').html(province[100].target)
      $('#completed').html(province[100].completed)
      $('#turkeypercent').html("%" + province[100].percent)
      if (province[100].percent !== 100) {
        $('#startColor').attr("offset", province[100].percent - 25 + "%")
        $('#endColor').attr("offset", province[100].percent + 5 + "%")
      } else {
        $('#startColor').attr("offset", "100%")
        $('#endColor').attr("offset", "100%")
      }
    });
  $(document).on("click", "#joinCTA", function () {
    if ($('.initial').length) {
      $('.initial').removeClass('initial')
      console.log('labada')
      setTimeout(() => {
        $('#top-5').show()
        $('#province-detail').hide()
        $('#form').show()
        $('#detail').show()
      }, 300);
    } else {
      $('#province-detail').hide()
      $('#form').show()
      $('#detail').show()
    }
    return false
  });
  $(document).on("click", "#join", function () {
    $('#form').show()
    $('#province-detail').hide()
    return false
  });


})