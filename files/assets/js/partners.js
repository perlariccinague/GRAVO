const allMembers = document.querySelectorAll('.members-top');
const allMemberPopups = document.querySelectorAll('.members-bottom');
let popUpShowing = false;

allMembers.forEach(member => {
    member.addEventListener('click', event => {
       console.log(member);
        document.querySelector('.members-bottom').style.display ="block"
    })
});


/*popUpShowing = true;
     allMemberPopups.forEach(popup => {
         popup.style.display ="block";
     })*/













