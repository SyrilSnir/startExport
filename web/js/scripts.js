var se = {
    defaultState : true,
    utils : {
        animate: {
            slidePanel : function(transformType){
                var $leftSubhead = $('.left-column .se-subhead'),
                    $rightSubhead = $('.right-column .se-subhead');
                    $leftSubhead.text('');
                    $rightSubhead.text('');
                switch (transformType) {                  
                    case 'right':
                        $('#se-standart-right').add('.left-selector').addClass('hide');
                        $('#left-main-content').addClass('hide');
                        $('#se-left-head').animate({
                            fontSize : '2em',
                            letterSpacing : '.2em' ,
                            right: '0'
                        },500
                                );
                            $('#se-right-head').animate({
                                    fontSize : '5em',
                                    letterSpacing : '.55em'                          
                                    },500
                            );
                            $('.se-subhead').animate({
                                fontSize: '1em'
                            },500);
                      //  }
                        $('.left-column').animate({
                           maxWidth: '25%'
                        },500);
                        $('.right-column').animate({
                           maxWidth: '75%',
                           flexBasis: '75%'
                        },500,function() {                            
                            if (se.defaultState === true) {
                                $('.left-column').removeClass('col-6');
                                $('.right-column').removeClass('col-6');       
                                $('#right-content-standart').removeClass('col-8').addClass('col-5');
                                $('#left-content-standart').removeClass('col-8 offset-4'); 
                                $('#left-content-standart-subblock').removeClass('col-2'); 
                                $('#right-content-standart-subblock').removeClass('col-2'); 
                               // $('#left-content-standart').removeClass('col-6 offset-6');
                            } else {
                                $('#right-content-standart').removeClass('col-10');                                
                                $('#se-standart-left').removeClass('hide');
                                $('.left-column').removeClass('col-9');
                                $('.right-column').removeClass('col-3');                                 
                              //  
                            }
                            $('#right-content-standart').addClass('col-5');
                            $('#right-content-delimiter').addClass('col-2');
                            $('#right-content-standart-subblock').addClass('col-5');
                            
                            $('#left-content-standart').removeClass('col-5');
                            $('.left-column').addClass('col-3');
                            $('.right-column').addClass('col-9');
                            $('#left-content-standart').addClass('col-10 offset-2');                            
                            $('#dynamic-right-desc-standart').appendTo('#right-block-standart-wrapper');
                            $('#dynamic-left-desc-standart').appendTo('#dynamic-left-default-wrapper');
                            $('#right-main-content').removeClass('hide');                            
                            $('#right-first-row').addClass('right-block-expand');
                            $('.right-selector').removeClass('hide');
                       /*     $('#header-nav-brand').removeClass('big');*/
                            
                            $leftSubhead.text('ПАРТН');
                            $rightSubhead.text('ЕРСТВО НОВОГО УРОВНЯ');
                            se.defaultState = false;
                        });                        
                        break;                        
                    case 'left':
                        $('#se-standart-right').removeClass('hide');
                        $('#se-standart-left').addClass('hide');
                        $('#right-main-content').addClass('hide');
                        $('.right-selector').addClass('hide');
                        $('#se-left-head').animate({
                                fontSize : '5em',
                                letterSpacing : '.7em',
                                right: '-.5em'
                            },500
                        );
                        $('#se-right-head').animate({
                                fontSize : '2em',
                                letterSpacing : '.25em'                            
                            },500
                        );
                        if (se.defaultState !== false) {                        
                            $('.se-subhead').animate({
                                fontSize: '1em'
                            },500);
                        }
                        $('.right-column').animate({
                           maxWidth: '25%'
                        },500);
                        $('.left-column').animate({
                           maxWidth: '75%',
                           flexBasis: '75%'
                        },500,function() {                            
                            if (se.defaultState === true) {
                                $('.right-column').removeClass('col-6');
                                $('.left-column').removeClass('col-6');
                                $('#left-content-standart').removeClass('col-8 offset-4');  
                                $('#right-content-standart').removeClass('col-8');
                                $('#left-content-standart-subblock').removeClass('col-2');      
                                $('#right-content-standart-subblock').removeClass('col-2');      
                            } else {
                                $('#left-content-standart').removeClass('col-10 offset-2');                               
                                $('.right-column').removeClass('col-9');
                                $('.left-column').removeClass('col-3');                                
                                $('#right-content-standart').removeClass('col-5');
                            }
                            $('#left-content-standart').addClass('col-5');
                            $('#left-content-delimiter').addClass('col-2');
                            $('#left-content-standart-subblock').addClass('col-5');
                             $('#left-main-content').removeClass('hide');                           
                            $('.right-column').addClass('col-3');
                            $('.left-column').addClass('col-9');                            
                            $('#right-content-standart').addClass('col-10'); 
                            $('#right-first-row').removeClass('right-block-expand');
                            $('#dynamic-right-desc-standart').appendTo('#dynamic-right-default-wrapper');
                            $('#dynamic-left-desc-standart').appendTo('#left-block-standart-wrapper');
                            $('.left-selector').removeClass('hide');
                       /*     $('#header-nav-brand').addClass('big');*/
                            $leftSubhead.text('ПАРТНЕРСТВО НОВОГО');
                            $rightSubhead.text('УРОВНЯ');
                            se.defaultState = false;
                        });
                        break;
                }                
            },
            slidePanelMobile : function(transformType) {
                console.log(transformType);
                
            }
        }
    }
};

$(function() {
    var pollBtnTop = $('.se-head-container').outerHeight(true) + $('.se-head-container').offset().top - 30,
    $pollButton = $('#btn-poll-container');
    $pollButton.css('top',pollBtnTop + 'px');
    $pollButton.removeClass('hide');
    $('.se-special-price').click(function(e){
    var id = this.id,
    animateFunctions = se.utils.animate,
    transformType = id.split('-').pop();
    $('#btn-poll-container').remove();
    if (id.indexOf('standart') != -1) {
        animateFunctions.slidePanel(transformType);
    } else if (id.indexOf('mobile') != -1) {        
        animateFunctions.slidePanelMobile(transformType);
    }
    
});
$('.user-selector-switch').click(function(){
    var $sections;
    if ($(this).parent('.right-selector').length > 0) {
        console.log('right');
        $sections = $('#right-main-content section');
    } else {
        console.log('left');
        $sections = $('#left-main-content section')
    }
    $(this).toggleClass('switch-left').toggleClass('switch-right');
    $sections.map(function(idx,el) {
        var $element = $(el);
            $element.slideToggle(500);
            $element.toggleClass('hide');
    });
});
    
})

