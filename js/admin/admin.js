function show(show, hidden1, hidden2, hidden3, hidden4) {
    document.getElementById(show).style.display = 'block';
    document.getElementById(hidden1).style.display = 'none';
    document.getElementById(hidden2).style.display = 'none';
    document.getElementById(hidden3).style.display = 'none';
    document.getElementById(hidden4).style.display = 'none';
}

function show_message() {
    document.getElementById('message').style.display = 'block';

}

function hide_message() {
    document.getElementById('message').style.display = 'none';

}