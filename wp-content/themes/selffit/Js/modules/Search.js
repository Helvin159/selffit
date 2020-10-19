import $ from "jquery"

class Search{    
    // Constructor
    constructor(){
        this.openButton = $(".searchBtn")
        this.closeButton = $("#closeOverlay")
        this.searchOverlay = $("#searchOverlay")
        this.events()
    }

    // Events
    events(){
        this.openButton.on("click", this.openOverlay.bind(this))
        this.closeButton.on("click", this.closeOverlay.bind(this))
        $(document).on("keyup", this.keyCloser.bind(this))
    }

    // Methods
    keyCloser(e){
        // 27
        if(e.keyCode == 27){
            this.closeOverlay()
        }
    }

    openOverlay(){
        this.searchOverlay.addClass("overlayOn");
        $('html').addClass('noScroll');

    }

    closeOverlay(){
        this.searchOverlay.removeClass("overlayOn");
        $('html').removeClass('noScroll');
    }

}

export default Search