  // Subscribe to news letter
  const newsServiceID = 'service_om7aou8';
  const newsTemplateID = 'template_9r3i25c';

  // const NewsForm = document.getElementById('popupSubscribed');
  const NewsEmail = document.getElementById('newsEmail');


  document.getElementById('popupSubscribed').addEventListener('submit', function(e){
      e.preventDefault();
     

      emailjs.sendForm(newsServiceID, newsTemplateID, this)
      .then((res)=>{
          NewsEmail.value = ''
          alert('Thanks for subscribing');
      }).catch((err)=>{
          console.log(err);
      })

  })