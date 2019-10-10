/*! SVG Türkiye Haritası | MIT Lisans | dnomak.com */

function init() {
  const element = document.querySelector('#breath-map');


  element.addEventListener(
    'click',
    function (event) {
      if (event.target.tagName === 'path') {
        const parent = event.target.parentNode;
        const className= parent.getAttribute('class');
        const target= parent.getAttribute('data-target');
        const completed= parent.getAttribute('data-completed');
        const name= parent.getAttribute('data-name');
        const percent= parent.getAttribute('data-percent');
        const id = parent.getAttribute('data-id');
        const valuekey = parseInt(parent.getAttribute('data-valuekey'), 10);
        const url = 'a/img/provinces/'+id+'.svg'
        $('.initial').removeClass('initial')
        $('#detail .turkey').html(name)
        $('#detail .target').html(target)
        $('#detail .completed').html(completed)
        $('#detail .percent strong').html(percent)
        $('#detail .target').html(target)
        $('#detail figure').attr('class', className);
        $('#detail figure').html('')
        $('#detail figure').prepend('<img src="'+url+'" />')
        var $img = jQuery('#detail figure img');
        
        jQuery.get(url, function(data) {
          var $svg = jQuery(data).find('svg');
          $svg = $svg.removeAttr('xmlns:a');
          $img.replaceWith($svg);
          if (valuekey === 100){
            $('#detail figure').append('<img src="a/img/tree.svg" class="tree" />')   
          }
      }, 'xml');    
        setTimeout(() => {
          $('#detail').show()
        }, 300);
      }
    }
  );
}

$(document).ready(function () {
  $.get('a/js/data.json',
    function (data, textStatus, jqXHR) {
      const province = data.places
      $.each(province, function (key, value) {
        $('[data-id='+key+']').attr('class', 'percent-'+value.percent);
        $('[data-id='+key+']').attr('data-target', value.target)
        $('[data-id='+key+']').attr('data-completed', value.completed)
        $('[data-id='+key+']').attr('data-percent', '%'+value.percent)
        $('[data-id='+key+']').attr('data-valuekey', value.percent)
      });
      $('#target').html(province[100].target)
      $('#completed').html(province[100].completed)
      $('#turkeypercent').html("%"+province[100].percent)
      if(province[100].percent !== 100){
        $('#startColor').attr("offset", province[100].percent - 25 + "%")
        $('#endColor').attr("offset", province[100].percent + 5 + "%")
      }
      else{
        $('#startColor').attr("offset", "100%")
        $('#endColor').attr("offset", "100%")
      }
    });



})