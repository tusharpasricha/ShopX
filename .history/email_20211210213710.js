// window.onload = function () {
//     document.getElementById('enquire').addEventListener('submit', function (event) {
//         event.preventDefault();
//         // generate a five digit number for the contact_number variable
//         this.contact_number.value = Math.random() * 100000 | 0;
//         // these IDs from the previous steps
//         emailjs.sendForm('contact_service', 'contact_form', this)
//             .then(function () {
//                 console.log('SUCCESS!');
//             }, function (error) {
//                 console.log('FAILED...', error);
//             });
//     });
// }

//name --> customer
//email --> seller
// msg --> customer-details + product details ,
// you will be contact shortly.....
function sendmail(customer, seller_mail, msg) {
   
    emailjs.init('user_Ida2B4h3hA1PCx42QkSUZ');
    emailjs.send(service_5ojsiec, template_iz8lq9p, {
        from_name: customer,
        to_name: seller_mail,
        message: msg,
    });
}