/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



WebModel = Backbone.Model.extend({
  var1: 0,
  initialize:function(x){
    var1=x;
  }
});

$(document).ready(function(){
  var m = new WebModel(42);
  $("#jq1").click(function(){
    alert($(this).text()+$(".jqcl1").text()+m.get("var1"));
  });
  m.set("var1",12);
});
