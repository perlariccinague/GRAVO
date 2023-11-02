const allMembers = document.querySelectorAll('.members-top');
const allMemberPopups = document.querySelectorAll('.members-bottom');
const popUpClose = document.querySelectorAll('.popup-close');
const overlay = document.querySelector('.member-overlay')


allMembers.forEach(member => {
    member.addEventListener('click', event => {
        let memberPopUp = member.nextElementSibling;
        if (memberPopUp.style.display === "block") {
            memberPopUp.style.display = "none";
            overlay.style.display = 'none'
        } else {
            memberPopUp.style.display = "block";
            overlay.style.display = 'block'
        }
    });
});

popUpClose.forEach(close => {
    close.addEventListener('click', (event) => {
        event.preventDefault();
        allMemberPopups.forEach(memberPopUp => {
              memberPopUp.style.display = "none";
        })
        overlay.style.display = 'none'
    })
})


















