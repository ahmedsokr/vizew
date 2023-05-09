<?php

class videoUploadForm
{

  private $con;

  public function __construct($con)
  {
    $this->con = $con;
  }

  public function createUploadForm()
  {
    $fileInput = $this->createFileInput();
    $titleInput = $this->createTitleInput(null);
    $descriptionInput = $this->createDescriptionInput(null);
    $uploadButton = $this->createUploadButton();
    return "<form action='processing' method='POST' enctype='multipart/form-data'>
					$fileInput
					$titleInput
					$descriptionInput
					$uploadButton
					<input type='hidden' value='' id='video_url' name='video_url'>
				</form>";
  }

  public function createEditDetailsForm($video)
  {
    $titleInput = $this->createTitleInput($video->getTitle());
    $descriptionInput = $this->createDescriptionInput($video->getDescription());
    $saveButton = $this->createSaveButton();
    $deleteButton = $this->createDeleteButton();
    return "<form method='POST'>
					$titleInput
					$descriptionInput
					$saveButton
					$deleteButton
				</form>";
  }

  private function createFileInput()
  {
    return "<div class='input-group mb-3'>
				  	<div class='custom-file'>
					  <button type='button' class='btn vizew-btns' id='upload_widget_opener' required>Upload Video</button>
				  	</div>
				</div>";
  }

  private function createTitleInput($value)
  {
    if ($value == null) $value = "";
    return "<div class='form-group'>
                    <label for='name'>Title</label>
                    <input type='text' class='form-control' id='name' name='titleInput' value='$value' required autocomplete='off'>
                </div>";
  }

  private function createDescriptionInput($value)
  {
    if ($value == null) $value = "";
    return "<div class='form-group'>
                    <label for='description'>Description</label>
                    <textarea name='descriptionInput' class='form-control' id='description' cols='10' rows='2'>$value</textarea>
                </div>";
  }


  private function createUploadButton()
  {
    return "<button data-toggle='modal' data-target='#loadingModal' class='btn vizew-btn mt-30' type='submit' name='uploadButton'>Upload</button>";
  }

  private function createSaveButton()
  {
    return "<button data-toggle='modal' data-target='#loadingModal' class='btn vizew-btn mt-30' type='submit' name='saveButton'>Save</button>";
  }

  private function createDeleteButton()
  {
    return "<button data-toggle='modal' data-target='#loadingModal' class='btn vizew-btn mt-30' type='submit' name='deleteButton'>Delete this video</button>";
  }
}
