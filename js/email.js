



    const serviceID = 'service_2vceczu';
    const templateID = 'template_6ehliui';
 
    const Name = document.getElementById('name');
    const email = document.getElementById('email');
    const message = document.getElementById('message');


    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault()
       
        emailjs.sendForm(serviceID, templateID, this)
            .then((res)=>{
                Name.value = '';
                email.value = '';
                message.value = '';
                alert('Thanks for Contacting Us')
            }).catch((err)=>{
                console.log(err);
            })
    });
    




    

  
    
    
  

