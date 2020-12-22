import $ from 'jquery'

class cardHover{

    // Constructor
constructor(){
    this.card = $(".productCards");
    this.cardOpen = false
    this.events();
}

    // Events
events(){
    
    // this.card.on('mouseenter', (e) => {alert(e.target.id)})

    this.card.on('mouseenter', this.openCardOverlay.bind(this))
    // this.card.addEventListener('mouseover', this.openCardOverlay.bind(this))
    this.card.on('mouseleave', this.closeCardOverlay.bind(this))
}


    // Methods

    openCardOverlay(e){
        if(this.cardOpen === false){
            let cardId = e.target.id
            console.log(cardId)
            $(`#${cardId}`).find($('.cardOverlay')).addClass('overlayOn')
        }    
        return this.cardOpen = true
    }

    closeCardOverlay(){
        if(this.cardOpen === true){
            this.card.find('.cardOverlay').removeClass('overlayOn')
        }
        return this.cardOpen = false
    }
}

export default cardHover;