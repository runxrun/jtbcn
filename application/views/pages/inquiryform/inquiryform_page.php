<div class="border-top" style="background-color: rgb(220 220 220);">
  <div class="container">
    <div id="zf_div_uUrzRA71eosU88K40BHcIZKjsisgL6XEAC9Mqdq1-I0"></div>
    <script type="text/javascript">
      (function() {
        try {
          var f = document.createElement("iframe");
          f.src = 'https://forms.zohopublic.com/JTBIC/form/INQ/formperma/uUrzRA71eosU88K40BHcIZKjsisgL6XEAC9Mqdq1-I0?zf_rszfm=1';
          f.style.border = "none";
          f.style.height = "723px";
          f.style.width = "90%";
          f.style.transition = "all 0.5s ease";
          f.setAttribute("aria-label", 'Inquiry');

          var d = document.getElementById("zf_div_uUrzRA71eosU88K40BHcIZKjsisgL6XEAC9Mqdq1-I0");
          d.appendChild(f);
          window.addEventListener('message', function() {
            var evntData = event.data;
            if (evntData && evntData.constructor == String) {
              var zf_ifrm_data = evntData.split("|");
              if (zf_ifrm_data.length == 2 || zf_ifrm_data.length == 3) {
                var zf_perma = zf_ifrm_data[0];
                var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
                var iframe = document.getElementById("zf_div_uUrzRA71eosU88K40BHcIZKjsisgL6XEAC9Mqdq1-I0").getElementsByTagName("iframe")[0];
                if ((iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0) {
                  var prevIframeHeight = iframe.style.height;
                  var zf_tout = false;
                  if (zf_ifrm_data.length == 3) {
                    iframe.scrollIntoView();
                    zf_tout = true;
                  }
                  if (prevIframeHeight != zf_ifrm_ht_nw) {
                    if (zf_tout) {
                      setTimeout(function() {
                        iframe.style.height = zf_ifrm_ht_nw;
                      }, 500);
                    } else {
                      iframe.style.height = zf_ifrm_ht_nw;
                    }
                  }
                }
              }
            }
          }, false);
        } catch (e) {}
      })();
    </script>
  </div>
</div>