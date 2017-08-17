function insertReminder() {

  var title = $('#reminderTitle').val();
  var description = $('#reminderDescription').val();
  var deadline = $('#reminderDeadline').val();

  if (title.length > 0 && description.length > 0 && deadline.length > 0) {

    var xmlhttp = new XMLHttpRequest();

    var url = "../newReminder.php?title=" + title.toString() + "&description=" + description.toString() + "&deadline=" + deadline.toString();
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

  }

}
