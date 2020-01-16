jQuery(document).ready(function ($) {

    var body = document.getElementsByTagName("body")[0];
    var modal = document.getElementsByClassName("js-modal")[0];
    var btn = document.getElementsByClassName("js-modal-btn")[0];
    var span = document.getElementsByClassName("js-modal-close")[0];
    var content = document.getElementsByClassName("js-modal-content")[0];


    // Saat click button open modal
    if (btn != null) {
      btn.onclick = function(event) {
        event.preventDefault();
        var data_type = $(this).find('.js-modal-data').data('type');
        var data_url = $(this).find('.js-modal-data').data('url');
        $('.js-modal-content iframe').attr('src', get_youtube(data_url));
        body.classList.add("is-overflow-hidden");
        content.classList.add("is-opened");
        modal.style.display = "block";
      }
    }

    // Saat clicks on <span> (x), close modal
    if (span != null) {
      span.onclick = function(event) {
        event.preventDefault();

        $('.js-modal-content iframe').attr('src', '');
        body.classList.remove("is-overflow-hidden");   
        content.classList.remove("is-opened");   
        modal.style.display = "none";
      }
    }
    
    // Saat clicks outside of the modal, close modal
    window.onclick = function(event) {
      if (event.target == modal) {
        $('.js-modal-content iframe').attr('src', '');
        body.classList.remove("is-overflow-hidden");  
        content.classList.remove("is-opened");  
        modal.style.display = "none";
      }
    }

    // get URL parameter
    function get_youtube(data_url) {
        var name = 'v';
        var embed = 'https://www.youtube.com/embed/';
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(data_url);
        return results === null ? '' : embed + decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

});