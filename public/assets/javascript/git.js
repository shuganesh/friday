
function loadRepositories(token2) {

  // var token = token2;

  fetch('https://api.github.com/user/repos', {
    headers: {
      Authorization: `token ${token2}`
    }
  }).then(res => res.json()).then(json => loadRepo(json));


}

function loadRepo(data) {

  var container = document.getElementById('opensource-projects');
    console.log('data now', data);

    function compare(a, b) {
      if (a.watchers > b.watchers) {
        return -1;
      }
      if (a.watchers < b.watchers) {
        return 1;
      }
      return 0;
    }

    data.sort(compare);
    data.forEach(v => {

      clone = "'" + v.clone_url + "'";
      name = "'" + v.name + "'";

      git = "<div class='col col-md-6 m-0 p-2'>";
      git += "<h3>"
      git += v.name
      git += "</h3>"
      git += "<div id='" + v.name + "' aria-labelledby='flush-headingOne' data-bs-parent='#accordionFlushExample'>"
      git += "<div class='col col-md-12 m-0 p-0'>"
      git += "<p> Clone Url : <code class='text-center clone_url' onclick='copyClipboard(" + v.id + ")' id='" + v.id + "'>" + v.clone_url + "</code></p>"
      git += "<p> Updated : " + new Date(v.updated_at) + "</p>"
      git += '<p><a target="_blank" class="btn btn-dark text-start" href=' + v.html_url + '> Open in GitHub <i class="fab fa-github"></i></a> <a class="btn btn-dark text-end" onclick="cloneRepo(' + clone + ', ' + name + ')"> Clone Project <i class="fas fa-clone"></i></a></p>'
      git += "</div>"
      git += "</div>"
      git += "</div>";

      container.innerHTML += git;
    })
}

function copyClipboard(id) {
  var range = document.createRange();
  var div = document.getElementById(id);

  div.style.transiton = "all .5s";
  div.style.color = "#fff";
  setTimeout("document.getElementById(" + id + ").style.color = '#d63384';", 200);
  console.log("ss");

  range.selectNode(document.getElementById(id));
  window.getSelection().removeAllRanges(); // clear current selection
  window.getSelection().addRange(range); // to select text
  document.execCommand("copy");
  window.getSelection().removeAllRanges();// to deselect

  // document.getElementById(id).style.fontSize = ".8725em";
}

function cloneRepo(cloneUrl, repoName) {
  Swal.fire({
    title: 'Repository ' + repoName,
    input: 'text',
    inputLabel: 'Enter Project Name : ',
    inputAttributes: {
      autocapitalize: 'off'
    },
    showCancelButton: true,
    confirmButtonText: 'Clone Project',
    showLoaderOnConfirm: true,
    preConfirm: (filename) => {
      return fetch(`/process/cloneFile`, {
        headers: {
          filename: `${filename}`,
          CloneUrl: `${cloneUrl}`
        }
      })
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Request failed: ${error}`
          )
      })
    },
    allowOutsideClick: () => !Swal.isLoading()
  }).then((result) => {
    if (result.value.isConfirmed == true) {
      Swal.fire(
        'Sucess',
        'Successfully Created Project File!',
        'success'
      )
    }
    if (result.value.isError == true) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: result.value.errorMessage,
      })
    }
  })
}




