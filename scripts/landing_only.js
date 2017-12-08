'use strict';
// Crop Text in Div
function cropBlogExcerptCopy(divName) {
  var blogPreview = document.querySelector(divName);
  var stringLength = 450;
  var blogPreviewCopy = blogPreview.innerHTML.substring(0,stringLength);
  blogPreview.innerHTML = blogPreviewCopy + '...';
}
cropBlogExcerptCopy('#firstPost');
cropBlogExcerptCopy('#secondPost');
cropBlogExcerptCopy('#thirdPost');
cropBlogExcerptCopy('#fourthPost');