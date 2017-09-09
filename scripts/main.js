/// <reference path="libs/jquery-3.2.1.min.js" />

function App() {
    App.prototype.init.apply(this,arguments);
}


App.prototype={
    init:function (containerId) {
        console.log('Hello world!');
    }
};

$(document).ready(function () {
    var app = new App();
});



