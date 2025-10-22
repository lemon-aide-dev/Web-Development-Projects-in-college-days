function prod(evt, cityName) {

      var i, tabcontent, tablinks;

      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

     
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }


      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }



    var popupViews = document.querySelectorAll('.popup-view');
        var popupBtns = document.querySelectorAll('.popup-btn');
        var closeBtns = document.querySelectorAll('.close-btn');

        var popup = function(popupClick){
        popupViews[popupClick].classList.add('active');
      }

      popupBtns.forEach((popupBtn, i) => {
        popupBtn.addEventListener("click", () => {
        popup(i);
        });
      });

      closeBtns.forEach((closeBtn) => {
        closeBtn.addEventListener("click", () =>{
          popupViews.forEach((popupView) => {
            popupView.classList.remove('active');
          });
        });
      });