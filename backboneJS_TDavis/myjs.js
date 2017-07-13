$.ajaxPrefilter( function( options, originalOptions, jqXHR ) {
  options.url = 'http://backbone-beginner.herokuapp.com' + options.url;
});

var Router = Backbone.Router.extend({
  routes: {
    '' : 'asdf'
  }
});

var UserList = Backbone.View.extend({
  el: '.page',
  render: function(){
    var users = new Users();
    users.fetch({
      
    })
    this.$el.html('PLACE HOLDER');
  }
});

var Users = Backbone.Collection.extend({
  url: "/users"
});

var userlist = new UserList();

var r = new Router();
r.on('route:asdf', function(){
  console.log('Home page loaded.');
  userlist.render();
});

Backbone.history.start();
