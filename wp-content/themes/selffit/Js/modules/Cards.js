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
    
    // this.card.mouseover(this.assignID.bind(this))
    // this.card.mouseenter(this.openCardOverlay.bind(this))
    // this.card.mouseleave(this.closeCardOverlay.bind(this))
}


    // Methods
    assignID(e){
        e.this.id = this.card.attr('id')
        alert(e.this.id);
    }

    openCardOverlay(){
        // this.card.find('.cardOverlay').addClass('overlayOn')
        this.cardOpen = true

        if(!$('.cardOverlay').hasClass('overlayOn')){
            $('.cardOverlay').addClass('overlayOn')
        }
    }

    closeCardOverlay(){
        
        // $('.cardOverlay').removeClass('overlayOn')
        this.card.find('.cardOverlay').removeClass('overlayOn')
        this.cardOpen = false
    }
}

export default cardHover;