

  nrSlide=3;
  function Load(){
	nrShown = 0;
	vect = new Array(nrSlide + 1);
	vect[0] = document.getElementById("slide1");
	vect[0].style.visibility = "visible";
	vect[0].style.repeat="no-repeat";
	for (var i = 1; i < nrSlide; i++)
	{
	  vect[i] = document.getElementById("slide" + (i+1));
	  vect[i].style.repeat="no-repeat";
	}
                ShowNextPrev(nrShown);
  }
  function prev(){
	nrShown++;

	if(nrShown == nrSlide) {
	  nrShown=0;
	}	
	ShowNextPrev(nrShown);
	Effect();
  }
  function next(){
  
	nrShown--;

	if(nrShown == -1) {
	  nrShown = nrSlide -1;
	}

	ShowNextPrev(nrShown);
	Effect();
  }
  function finger_appers()
  {
	document.getElementById('finger')[0].style.visibility="visible";
	setTimeout(4000);
	

  }
  function big()
  {
	var img =document.querySelector(".current").querySelector("input");
	if (img.style.width === "300px") {
		img.style.zIndex=10000;
		img.style.width = "400px";
		img.style.height= "500px";

	} else {
		img.style.zIndex=0;
		img.style.width = "300px";
		img.style.height= "400px";

	}
  }
  function ShowNextPrev(nrShown)
  {

	// var nrShown2 = nrShown == nrSlide-1 ? -1 : nrShown;

	var nrShown2=nrShown;
	if(nrShown==0)
	{
		document.querySelector(".next").querySelector("input").style.backgroundImage = "url("+document.querySelector(".slider").querySelectorAll("img")[nrSlide-1].src+")";
		document.querySelector(".next").querySelector("input").style.backgroundSize = "contain";
	}
	else
	{
		document.querySelector(".next").querySelector("input").style.backgroundImage = "url("+document.querySelector(".slider").querySelectorAll("img")[nrShown2-1].src+")";
		document.querySelector(".next").querySelector("input").style.backgroundSize = "contain";
	}


	// var nrShown3 = nrShown == 0 ? nrSlide : nrShown;
	document.querySelector(".prev").querySelector("input").style.backgroundImage = "url("+document.querySelector(".slider").querySelectorAll("img")[nrShown2].src+")";
	document.querySelector(".prev").querySelector("input").style.backgroundSize = "contain";
	
	// var nrShown4 = nrShown == nrSlide+1 ? 1 : nrShown;
	if(nrShown==nrSlide-1)
	{
		document.querySelector(".current").querySelector("input").style.backgroundImage = "url("+document.querySelector(".slider").querySelectorAll("img")[0].src+")";
		document.querySelector(".current").querySelector("input").style.backgroundSize = "contain";
	}
	else
	{
		document.querySelector(".current").querySelector("input").style.backgroundImage = "url("+document.querySelector(".slider").querySelectorAll("img")[nrShown2+1].src+")";
		document.querySelector(".current").querySelector("input").style.backgroundSize = "contain";
	}


  }
  
  // Effect
  function Effect(){
	for (var i=0; i < nrSlide; i++){
	  vect[i].style.opacity = "0";
	  vect[i].style.visibility = "hidden";
	  vect[i].style.repeat="no-repeat";
	}
	vect[nrShown].style.opacity = "1";
	vect[nrShown].style.visibility = "visible";
	vect[nrShown].style.repeat="no-repeat";
	
  }
  
  Load();