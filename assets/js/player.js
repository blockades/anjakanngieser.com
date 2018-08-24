var SC_CLIENT_ID = 'a30bfcaa832009fe3e972812fdd8643c'

SC.initialize({
  client_id: SC_CLIENT_ID
})

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Player = function () {
  this.ended = function() {
    this.stop();
  }

  this.play = function(src) {
    console.warn(src, this.audio, this.audio.src);
    this.stop();
    this.audio.src = src;
    this.audio.load();
    this.audio.play();
  }

  this.durationUpdate = function(src) {
    console.warn(this.audio.duration);
  }

  this.timeUpdate = function() {
    console.warn(this.audio.currentTime);
  }

  this.start = function(url, el) {
    var self = this;
    SC.resolve(url).then(function(data) {
      SC.get('/tracks/' + data.id).then(function (data) {
        if (data.streamable) {
          var stream_url = data.stream_url+'?client_id='+SC_CLIENT_ID
          self.play(stream_url);
        }
      });
    });
  }

  this.playing = false;

  this.audio = new Audio();
  this.audio.autoplay = false;
  this.audio.preload = false;

  this.audio.onended = this.ended.bind(this);
  this.audio.ondurationchange = this.durationUpdate.bind(this)
  this.audio.onloadedmetadata = this.durationUpdate.bind(this)

}

$(document).ready(function() {
  var player = new Player()

  $(document.body).on('click', 'a[href*="soundcloud.com"]', function(event) {
    event.preventDefault();
    var url = this.href;
    player.start(url, this)
  })
})
