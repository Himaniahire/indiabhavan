function sendMail(form) {
    var name = form.name.value;
    var phone = form.phone.value;
    var guests = form.guests.value;
    var date = form.date.value;
    var message = form.message.value;

    var subject = "Booking Request from " + name;
    var body = "Name: " + encodeURIComponent(name) + "%0D%0A" +
               "Phone: " + encodeURIComponent(phone) + "%0D%0A" +
               "Number of Guests: " + encodeURIComponent(guests) + "%0D%0A" +
               "Date: " + encodeURIComponent(date) + "%0D%0A" +
               "Message: " + encodeURIComponent(message).replace(/%0A/g, "%0D%0A");

    var mailtoLink = "mailto:info@indiabhavan.ie?subject=" + encodeURIComponent(subject) + "&body=" + body;

    window.location.href = mailtoLink;
    return false;
}