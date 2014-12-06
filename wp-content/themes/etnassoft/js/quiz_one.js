jQuery('document').ready( function(){

  var $answers_ul = jQuery('.answers');
  var $answers = [1,4,1,4,1,1,1,2,3,2,1,2,1,2];

  jQuery('#check_quiz').click( function(){
    var score = 0;
    for( var x = 0; x < $answers_ul.length; x++){
      var answer_selected = jQuery('input:checked', $answers_ul[x]).attr('id');
      if(answer_selected == 'answer-' + (x + 1) + '-' + $answers[x]){
        score += 1;
      }
    }
    alert( score + ' preguntas correctas!');
  });
});