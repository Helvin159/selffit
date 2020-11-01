import $ from "jquery"

class Search{    
    // Constructor
    constructor(){
        this.openButton = $(".searchBtn")
        this.closeButton = $("#closeOverlay")
        this.searchOverlay = $("#searchOverlay")
        this.searchBar = $('.searchBar')
        this.loadingDiv = $('#loading')
        this.resultsDiv = $('#searchResults')
        this.events()
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.typingTimer;
        this.prevValue;
    }

    // Events
    events(){
        this.openButton.on("click", this.openOverlay.bind(this))
        this.closeButton.on("click", this.closeOverlay.bind(this))
        $(document).on("keydown", this.keyCloser.bind(this))
        this.searchBar.on("keyup", this.typingLogic.bind(this))
        
    }

    // Methods
    typingLogic(){
        if(this.searchBar.val() != this.prevValue){
            clearTimeout(this.typingTimer);
                if(this.searchBar.val()){
                   if(!this.isSpinnerVisible){
                    this.resultsDiv.html('<div class="loadingContainer"><div class="box"></div><div class="box"></div><div>')
                    this.isSpinnerVisible = true
                }
                this.typingTimer = setTimeout(this.getResults.bind(this), 2000);
                }else{
                    this.resultsDiv.html('')
                    this.isSpinnerVisible = false;
                }
                
        }
        
        this.prevValue = this.searchBar.val();
    }

    getResults(){
        $.getJSON('https://selffitdr.com/wp-json/wp/v2/product?search=' + this.searchBar.val(), (result) => {
        this.resultsDiv.html(`
            <div class="container px-5 py-3">
                <h1>Resultados</h1>
                <hr class="searchHr">
            </div>
            ${result.length ? '<div class="row"><div class="col-md-12"><h3>Productos</h3><br><div class="row">' : '<p>No existen resultados para esa busqueda.</p>'}
                        ${result.map(item => 
                        `<div class="col-md-3 py-5 text-center">
                            <h4 class="poiret"><span><a href="${item.link}">${item.title.rendered}</a></span></h4>
                            <hr class="w-75">
                        </div>`).join('')} 
            ${result.length ? '</div></div></div>' : ''}
        `)
        })
    }


    keyCloser(e){
        // 27
        if(e.keyCode == 27 && !this.isOverlayOpen && !$("input, textarea").is(':focus')){
            this.closeOverlay()
        }
    }

    openOverlay(){
        this.searchOverlay.addClass("overlayOn");
        $('html').addClass('noScroll');
        this.isOverlayOpenc = true;

    }

    closeOverlay(){
        this.searchOverlay.removeClass("overlayOn");
        $('html').removeClass('noScroll');
        this.isOverlayOpen = false;
    }

}

export default Search