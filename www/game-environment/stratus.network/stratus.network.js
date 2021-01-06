var player = {};
var name = new XMLHttpRequest();
name.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       player.name = name.responseText;
    }
}
name.open("GET", "../player-name.txt", true);
name.send();

var color = new XMLHttpRequest();
color.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       player.preferredColor = color.responseText;
    }
}
color.open("GET", "../player-color.txt", true);
color.send();

var party = {};
party.members = {member: []};
party.members.add = function(playerName) {
  party.memebers.member[party.members.member.length] = playerName;
}
