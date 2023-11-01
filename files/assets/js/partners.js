const allMembers = document.querySelectorAll('.members-top');
const allMemberPopups = document.querySelectorAll('.members-bottom');
let showElement = false;


/*allMembers.forEach(member => {
    member.addEventListener('click', event => {
       console.log(member);
        document.querySelector('.members-bottom').style.display ="block"
    })
});*/

allMembers.forEach(member => {
    member.addEventListener('click', event => {
        let memberPopUp = member.nextElementSibling; // Get the next sibling
       /* console.log(showElement);*/
        if (memberPopUp.style.display === "block") {
            memberPopUp.style.display = "none"; // Hide the element
            showElement = false;
        } else {
            memberPopUp.style.display = "block"; // Show the element
            console.log(showElement);
            showElement = true;
        }
        showElement = false;
    });
});















