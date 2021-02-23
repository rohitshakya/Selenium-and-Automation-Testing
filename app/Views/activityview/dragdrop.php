
   <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/css/base/jquery.ui.all.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.2/css/lightness/jquery-ui-1.10.2.custom.min.css" rel="stylesheet">
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
<?php if (count($qns_data_dragimg) > 0){
		$ws  = mt_rand(0, count($qns_data_dragimg)-1);
			$qns_data_dragimg= $qns_data_dragimg;
		} 
		
		$dragword = json_decode($qns_data_dragimg[$ws]['text']);
		$dragimg = $qns_data_dragimg[$ws]['image'];
		$dragwordVal = array();
		$dragwordtop = array();
		
		for($j=0; $j < count($dragword); $j++){
			$dragwordVal[]= $dragword[$j]->text;
			$dragwordtop[]= "left: " .$dragword[$j]->left. "; top: " .$dragword[$j]->top.";";
	
	
		}
	
		?>
<style>

#cardSlots img{
    width: 249px;
    height: 235px;
    position: relative;
    display: block;
    background-color: white;
    margin: 0px auto;
} 

 

/* Slots for final card positions */
 
#cardSlots {
  margin: 0 auto 3em auto;
  background: navy;
   background-image: url(../../master/<?php echo $dragimg ; ?>);
   background-size: cover;
  background-repeat: no-repeat;
  height: 237px;
  width: 250px;

}
 
/* The initial pile of unsorted cards */
 
#cardPile {
    float: left;
    width: 100%;
    padding: 7px;
}
 
#cardSlots, #cardPile {

  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
}
 
/* Individual cards and slots */
 
#cardSlots div, #cardPile div {
  float: left;

  height: 18%;

  padding-bottom: 0;
  border: 2px solid #33333342;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: #fff;
}
 

#cardSlots div.hovered {
  background: #aaa;
}
 
#cardSlots div {
 position: absolute !important;
    height: 23px;
    width: 50px;
    font-size: 13px;
	text-align: center;
    font-weight: bold;
    background-color: white;
    opacity: unset;
}
 
#cardPile div {
  
    width: 50px;
    font-size: 13px;
 
	text-align: center;
    font-weight: bold;
}
 

/* "You did it!" message */
#successMessage {
 
  left: 580px;
  top: 250px;
  width: 0;
  height: 0;
  z-index: 100;
  background: #3c3b7b;
  border: 2px solid #333;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  padding: 20px;
}

.img {
    width: 249px;
    height: 235px;
    position: relative;
    display: block;
    background-color: white;
    margin: 0px auto;
}
</style>


<script type="text/javascript">

var correctCards = 0;
$( init );
var no=0;
function init() {

  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );

  // Reset the game
  correctCards = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );

  // Create the pile of shuffled cards
  //var numbers = [ 1, 2 ];
   var numbers = <?php echo json_encode($dragwordVal); ?>;
   no = numbers;
  //var terms = ['1', '2' ];
  <!--numbers.sort( function() { return Math.random() - .5 } );-->

  for ( var i=0; i<numbers.length; i++ ) {
    $('<div>' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i] ).appendTo( '#cardPile' ).draggable( {
      
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }

  // Create the card slots
  var words = numbers;
  var wordss = <?php echo json_encode($dragwordtop); ?>;
  for ( var i=1; i<=numbers.length; i++ ) {
    $('<div class="imgItem" style="'+wordss[i-1]+'">' +  + '</div>').data( 'number', numbers[i-1] ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }

}

function handleCardDrop( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
  if ( slotNumber == cardNumber ) {
	   $(this).text($(ui.draggable).text());
 
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.draggable( 'option', 'revert', true );
    correctCards++;
  } 


  if ( correctCards == no.length ) {
    $('#successMessage').show();
    $('#successMessage').animate( {
      width: '122px',
      height: '122px',
    } );
  }

}

</script>

  <div id="cardSlots" class="img"><img src="../../master/<?php echo $dragimg ; ?>"/></div>

    <div id="cardPile"> </div>
  
  <div id="successMessage" style=" margin: 0px auto;text-align: center; color: white">
    <h2>Good!</h2>
    <a href="javascript:void(0)" style="color: bisque;" onclick="init()">Play Again</a>
  </div>


