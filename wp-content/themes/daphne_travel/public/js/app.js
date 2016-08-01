/**
 * Created by goshan on 29.07.16.
 */

$('a[data-uk-modal].link-visa').bind('click',function (e) {
   $('#county').val('Страна: ' + this.innerHTML);
});