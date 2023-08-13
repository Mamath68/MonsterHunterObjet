<script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>
<script>
  /* paste this line in verbatim */
  window.formbutton = window.formbutton || function () { (formbutton.q = formbutton.q || []).push(arguments) };
  /* customize formbutton below*/
  formbutton("create", {
    action: "https://formspree.io/f/maygwjny",
    title: "Voulez-vous laisser un message?",
    fields: [
      {
        type: "email",
        label: "Votre Email:",
        name: "email",
        required: true,
        placeholder: "your@email.com"
      },
      {
        type: "textarea",
        label: "Votre Message",
        name: "message",
        placeholder: "Dites nous Tous",
      },
      { type: "submit" }
    ],
    styles: {
      title: {
        backgroundColor: "red"
      },
      button: {
        backgroundColor: "green"
      }
    }
  });
</script>