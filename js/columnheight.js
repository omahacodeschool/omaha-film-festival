jQuery( document ).ready ( function() {

  //collect all three main columns
  var sideNav = jQuery(".side-nav");
  var events = jQuery(".events-sidebar");
  var mainBody = jQuery(".main-body");
 
  //determine the max height
  //assume the main-body is the tallest column, as that'll be true in most cases
  var maxHeight = jQuery(mainBody).height();

  //check to see if the navbar is as tall as the maximum height so far
  if (maxHeight < jQuery(sideNav).height() ) {
    maxHeight = jQuery(sideNav).height();
  };
  
  //check to see if the events bar is as tall as the maximum height so far
  if (maxHeight < jQuery(events).height() ) {
    maxHeight = jQuery(events).height();
  };
  
  //set the height of all columns to the maximum height
  //but first, some extra cushion.
  maxHeight += 20;
  
  jQuery(sideNav).height(maxHeight-10); //adjusted to account for margin/padding
  jQuery(events).height(maxHeight-10); //adjusted to account for margin/padding
  jQuery(mainBody).height(maxHeight);
  
  
});