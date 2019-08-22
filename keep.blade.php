<button onclick="share('title', 'https://www.xbox.com/en-US/xbox-one-x', 'Check out the new Xbox!')">
  Share
</button>

/**
 * @file
 * Share
 */

/**
 * This call allows you to share content
 *
 * @alias Create Share
 * @method share
 * @param {string} Title title of content to share.
 * @param {string} Text text of content to share.
 * @param {string} url url of content to share.
 * @see https://raw.githubusercontent.com/pwa-builder/Windows-universal-js-samples/master/win10/images/shareCommand.PNG
 * @returns {boolean} success
 */

async function share(title, text, url) {
  if (window.Windows) {
    const DataTransferManager = window.Windows.ApplicationModel.DataTransfer.DataTransferManager;

    const dataTransferManager = DataTransferManager.getForCurrentView();
    dataTransferManager.addEventListener("datarequested", (ev) => {
      const data = ev.request.data;

      data.properties.title = title;
      data.properties.url = url;
      data.setText(text);
    });

    DataTransferManager.showShareUI();

    return true;
  } else if (navigator.share) {
    try {
      await navigator.share({
        title: title,
        text: text,
        url: url,
      });

      return true;
    } catch (err) {
      console.error('There was an error trying to share this content');
      return false;
    }
  }
}

<button onclick="copyToClipboard('Text im copying')">
  Copy To Clipboard
</button>

async function copyToClipboard(stringToCopy) {
  if (navigator.clipboard) {
    try {
      await navigator.clipboard.writeText(stringToCopy);
      console.log('string copied to clipboard');
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  }
}

<!-- Member Modal -->
<div class="modal fade" id="memberModal">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <img class="img-responsived" src="{{ config('app.url') }}/images/dsc-eksu.png" height="40" alt="DSC EKSU">
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="memberForm" autocomplete="on">
        <div class="modal-body">
          <div class="tab">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <p class="ml-5 m-5 text-center lead">DSC is a Google Developers’ program for University students designed to help them build their mobile, web development & design skills. It is open to any student, ranging from novice developers who are just starting to advanced developers who want to further improve their skills. it also encourages them to make use of the acquired skill sets to solve local business problems around their institution. It is designed to help them build job-ready skills, making them further employable in the future.</p>
            </div>
          </div>
          <div class="tab">
            <div class="form-group">
              <label for="input-email">Email address</label>
              <input required type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="input-name">Fullname</label>
              <input required type="name" class="form-control" id="input-name" placeholder="Full name">
            </div>
            <div class="form-group">
              <label for="input-gender">Gender</label>
              <select required class="form-control" id="input-gender">
                <option value="Select One">Select One</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="input-phone">Phone</label>
              <input required type="tel" class="form-control" id="input-phone" placeholder="Phone">
            </div>
          </div>
          <div class="tab">
            <p>Academic information</p>
            <div class="form-group">
              <label for="input-faculty">Faculty</label>
              <input required type="text" class="form-control" id="input-faculty" placeholder="Faculty">
            </div>
            <div class="form-group">
              <label for="input-department">Department</label>
              <input required type="text" class="form-control" id="input-department" placeholder="Department">
            </div>
            <div class="form-group">
              <label for="input-level">Level</label>
              <select required class="form-control" id="input-level">
                <option value="Select One">Select One</option>
                <option value="100">100 Level</option>
                <option value="200">200 Level</option>
                <option value="300">300 Level</option>
                <option value="400">400 Level</option>
                <option value="500">500 Level</option>
              </select>
            </div>
          </div>
          <div class="tab">
            <p>Tecnical information</p>
            <div class="form-group">
              <label for="input-stack">What would you like to learn?</label>
              <select required class="form-control" id="input-stack">
                <option value="Select One">Select One</option>
                <option value="mobile-development">Mobile Development - Flutter</option>
                <option value="web-frontend">Web Frontend - HTML5, CSS3, JS Es6, Firebase</option>
                <option value="web-backend">Web Backend - PHP, Firebase</option>
                <option value="android-development">Android Development - Java</option>
                <option value="web-framework-laravel">Web Development - Laravel</option>
                <option value="web-framework-django">Web Development - Django</option>
                <option value="digital-design">Digital Design</option>
                <option value="leadership-skills">Leadership</option>
              </select>
            </div>
            <div class="form-group">
              <label for="input-category">How would you rate your programming knowledge</label>
              <select required class="form-control" id="input-category">
                <option value="Select One">Select One</option>
                <option value="novice">Novice (I have no idea about programming)</option>
                <option value="beginner">Beginner (I understand the basics)</option>
                <option value="intermediate">Intermediate (I can build a basic programme on my own)</option>
              </select>
            </div>
          </div>
          <div class="tab">
            <p>Confirmation</p>

            <p class="text-center">Are you Sure Your Details Are correct?</p>
          </div>
          <div class="tab">
            <div id="memberSubmit" class="h3 text-center hidden"></div>
          </div>
          <div class="tab">

          </div>

          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="hero-button step-button" id="prevBtn" onclick="nextPrev(-1)">
            <i class="fas fa-chevron-left"></i>&nbsp;Previous
          </button>
          <button type="button" class="hero-button step-button" id="nextBtn" onclick="nextPrev(1)"></button>
        </div>
      </form>
    </div>
  </div>
</div>
