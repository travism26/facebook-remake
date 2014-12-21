/**
 * Created by travismartin on 14-12-21.
 */

// 1
var App = Ember.Application.create({
    //LOG_TRANSITIONS: true, // basic logging of successful transitions
    //LOG_TRANSITIONS_INTERNAL: true // detailed logging of all routing steps
});
// 2
App.Router.map(function() {
    this.resource("messaging", {
        "path" : "message"
    });
});
// 3
App.Message = DS.Model.extend({
    "user" : DS.attr("string"),
    "text" : DS.attr("string")
});
// 4
App.ApplicationAdapter = DS.FixtureAdapter.extend();
// 5
App.Message.FIXTURES = [
    {
        "id"   : 1,
        "user" : "Chris",
        "text" : "Hello World."
    },
    {
        "id"   : 2,
        "user" : "Wayne",
        "text" : "Don't dig it, man."
    },
    {
        "id"   : 3,
        "user" : "Chris",
        "text" : "Meh."
    }
];