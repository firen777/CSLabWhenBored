/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



WebModel = Backbone.Model.extend({
  defaults:
  {
    name: "Tom",
    id: 42,
    address: "mnb st."
  },
  initialize:function(){
  },
  method1: function(){
    /**
     * on ("change:<field name>", function(){...})
     */
    this.on("change:id");
  }
});

$(document).ready(function(){ //wait for the document finish loading


  var m = new WebModel({
    name: "asdf", id: 1234
  });
  m.set({id:90});

  /*JQuery training*/
  $("#jq1").click(function(){
    alert($(this).text()+$(".jqcl1").text()+m.get("name")+m.get("id")+m.get("address"));
  });
  m.set("var1",12);
});
