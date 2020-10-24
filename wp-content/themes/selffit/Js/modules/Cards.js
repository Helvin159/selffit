import $ from 'jquery'

class cardHover{

    // Constructor
constructor(){
    this.card = $(".productCards");
    this.cardOpen = false
    this.id;
    this.events();
}

    // Events
events(){
    
    this.card.mouseenter(this.openCardOverlay.bind(this))
    this.card.mouseleave(this.closeCardOverlay.bind(this))
}


    // Methods

    openCardOverlay(){
        this.card.find('.cardOverlay').addClass('overlayOn')
        this.cardOpen = true

    }

    closeCardOverlay(){
        
        // $('.cardOverlay').removeClass('overlayOn')
        this.card.find('.cardOverlay').removeClass('overlayOn')
        this.cardOpen = false
    }
}

export default cardHover;