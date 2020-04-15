adminLib = (function() {
  const info = "Helper library for making controller calls to php.";

  const version = "0.1";
  const CONTROLLER_PATH = `${location.origin}/fend19-frontendproject-shop/admin/php/controller`;
  const INTERNAL_API_PATH = `${location.origin}/fend19-frontendproject-shop/admin/internalApi`;

  let adminLib = {
    drawCategoryTable() {
      const lib = this;
      const apiUrl = `${INTERNAL_API_PATH}/productCategories.php`;

      lib.loadJsonByXhr(apiUrl, function(categoryJson) {
        const table = document.querySelector("table#productCategoryAdminTable");
        let tableContent = `
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        `;
        categoryJson.forEach(category => {
          tableContent += `
            <tr data-post-id='${category.id}'>
                <td>${category.id}</td>
                <td>${category.name}</td>
                <td>
                    <form style='display: inline-block;' action='' method='POST' >
                        <input class='btn btn-left edit-btn' type='submit' data-categoryId='${category.id}' name='edit' value='Edit'>
                        <input type='hidden' name='categoryId' value='${category.id}'>
                    </form>
                    <form style='display: inline-block;' onsubmit='adminLib.deleteCategory(event);'>
                        <input class='btn btn-right del-btn' data-categoryId='${category.id}' type='submit' name='delete' value='Delete'>
                    </form>
                </td>
            </tr>
        `;
        });
        table.innerHTML = tableContent;
      });
    },

    createNewCategory: function(event) {
      const lib = this;

      const alertElement = document.querySelector("div#categoryAlert");
      const messageElement = document.querySelector("div#categoryAlert span.msg");

      const input = event.target.elements.newCategoryNameField;
      const categoryName = input.value;

      // validate input locally before submitting to server
      if (!categoryName || categoryName.length < 1 || categoryName.length > 20) {
        messageElement.textContent = "Incorrect category name.";
        lib.setFailStyle(alertElement);
        input.focus();
        event.preventDefault();
      }

      const xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          input.value = ""; // remember to empty input
          // lib.setSuccessStyle(alertElement);
          // messageElement.textContent = "Caregory created succsessfully.";
          lib.drawCategoryTable();
          // server validation failed
        } else if (this.readyState == 4 && this.status == 500) {
          messageElement.textContent = "Incorrect or diplicate category name.";
          lib.setFailStyle(alertElement);
          event.preventDefault();
        }
      };

      xmlhttp.open("POST", `${CONTROLLER_PATH}/category/createCategoryRequest.php`, true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send(`categoryName=${categoryName}`);

      event.preventDefault();
    },

    deleteCategory: function(event) {
      const lib = this;
      const alertElement = document.querySelector("div#categoryAlert");
      const messageElement = document.querySelector("div#categoryAlert span.msg");

      const button = event.target.elements.delete;
      const categoryId = button.dataset.categoryid;

      if (confirm("Are you sure?")) {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.querySelector(`tr[data-post-id="${categoryId}"]`).remove(); // remove deleted row from table
            // lib.setSuccessStyle(alertElement);
            // messageElement.textContent = "Caregory deleted succsessfully.";
            lib.drawCategoryTable();
          } else if (this.readyState == 4 && this.status == 500) {
            messageElement.textContent = "Failed to delete category.";
            lib.setFailStyle(alertElement);
            event.preventDefault();
          }
        };

        xmlhttp.open("POST", `${CONTROLLER_PATH}/category/deleteCategoryRequest.php`, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(`categoryId=${categoryId}`);
      }

      event.preventDefault();
    },

    setSuccessStyle: function(element) {
      element.classList.add("success");
      element.classList.remove("fail", "hidden");
    },

    setFailStyle: function(element) {
      element.classList.add("fail");
      element.classList.remove("success", "hidden");
    },

    hideParentElement: function(event) {
      const elementToHide = event.target.parentElement;
      elementToHide.classList.add("hidden");
      event.preventDefault();
    },

    loadJsonByXhr: function(url, callback) {
      let xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          callback(JSON.parse(this.responseText));
        }
      };
      xhr.open("GET", url, true);
      xhr.send();
    }
  };

  return adminLib;
})();
