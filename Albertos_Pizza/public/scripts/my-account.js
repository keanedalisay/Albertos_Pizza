
function enableAddressEdit() {
    var addressInput = document.getElementById("home-address");
    addressInput.disabled = !addressInput.disabled;
    if (!addressInput.disabled) {
        addressInput.focus();
    }
}


function deleteAddressContainer() {
    var addressContainer = document.querySelector('.address-container');
    if (addressContainer) {
        addressContainer.parentNode.removeChild(addressContainer);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const addAddressButton = document.getElementById("add-address-button");
    const addressContainerWrapper = document.getElementById("address-container-wrapper");

    function checkAddressContainers() {
        const addressContainers = addressContainerWrapper.querySelectorAll(".address-container");
        if (addressContainers.length === 0) {
            addAddressButton.style.display = "block";
        } else {
            addAddressButton.style.display = "none";
        }
    }

    function createAddressContainer() {
        const newAddressContainer = document.createElement("div");
        newAddressContainer.classList.add("address-container");

        addressContainerWrapper.appendChild(newAddressContainer);
        checkAddressContainers();
    }

    addAddressButton.addEventListener("click", function() {
        createAddressContainer();
    });

    checkAddressContainers();
});
