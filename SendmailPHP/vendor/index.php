<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>



<script type="text/javascript">
    plus-button
    function clickCounter() {
      if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
          localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
          localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
      } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
      }
    }
</script>
<!-- CSS -->
<style>
@charset "UTF-8";@media all {
    @charset "UTF-8";.wp-block-archives {
        box-sizing: border-box
    }

    .wp-block-archives-dropdown label {
        display: block
    }

    .wp-block-avatar {
        box-sizing: border-box
    }

    .wp-block-avatar.aligncenter {
        text-align: center
    }

    .wp-block-audio {
        box-sizing: border-box
    }

    .wp-block-audio figcaption {
        margin-bottom: 1em;
        margin-top: .5em
    }

    .wp-block-audio audio {
        min-width: 300px;
        width: 100%
    }

    .wp-block-button__link {
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        word-break: break-word
    }

    .wp-block-button__link.aligncenter {
        text-align: center
    }

    .wp-block-button__link.alignright {
        text-align: right
    }

    :where(.wp-block-button__link) {
        border-radius: 9999px;
        box-shadow: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        text-decoration: none
    }

    .wp-block-button[style*=text-decoration] .wp-block-button__link {
        text-decoration: inherit
    }

    .wp-block-buttons>.wp-block-button.has-custom-width {
        max-width: none
    }

    .wp-block-buttons>.wp-block-button.has-custom-width .wp-block-button__link {
        width: 100%
    }

    .wp-block-buttons>.wp-block-button.has-custom-font-size .wp-block-button__link {
        font-size: inherit
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
        width: calc(25% - var(--wp--style--block-gap,.5em)*.75)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-50 {
        width: calc(50% - var(--wp--style--block-gap,.5em)*.5)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-75 {
        width: calc(75% - var(--wp--style--block-gap,.5em)*.25)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-100 {
        flex-basis: 100%;
        width: 100%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-25 {
        width: 25%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-50 {
        width: 50%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-75 {
        width: 75%
    }

    .wp-block-button.is-style-squared,.wp-block-button__link.wp-block-button.is-style-squared {
        border-radius: 0
    }

    .wp-block-button.no-border-radius,.wp-block-button__link.no-border-radius {
        border-radius: 0!important
    }

    .wp-block-button .wp-block-button__link.is-style-outline,.wp-block-button.is-style-outline>.wp-block-button__link {
        border: 2px solid;
        padding: .667em 1.333em
    }

    .wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color),.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color) {
        color: currentColor
    }

    .wp-block-button .wp-block-button__link.is-style-outline:not(.has-background),.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background) {
        background-color: transparent;
        background-image: none
    }

    .wp-block-buttons.is-vertical {
        flex-direction: column
    }

    .wp-block-buttons.is-vertical>.wp-block-button:last-child {
        margin-bottom: 0
    }

    .wp-block-buttons>.wp-block-button {
        display: inline-block;
        margin: 0
    }

    .wp-block-buttons.is-content-justification-left {
        justify-content: flex-start
    }

    .wp-block-buttons.is-content-justification-left.is-vertical {
        align-items: flex-start
    }

    .wp-block-buttons.is-content-justification-center {
        justify-content: center
    }

    .wp-block-buttons.is-content-justification-center.is-vertical {
        align-items: center
    }

    .wp-block-buttons.is-content-justification-right {
        justify-content: flex-end
    }

    .wp-block-buttons.is-content-justification-right.is-vertical {
        align-items: flex-end
    }

    .wp-block-buttons.is-content-justification-space-between {
        justify-content: space-between
    }

    .wp-block-buttons.aligncenter {
        text-align: center
    }

    .wp-block-buttons:not(.is-content-justification-space-between,.is-content-justification-right,.is-content-justification-left,.is-content-justification-center) .wp-block-button.aligncenter {
        margin-left: auto;
        margin-right: auto;
        width: 100%
    }

    .wp-block-buttons[style*=text-decoration] .wp-block-button,.wp-block-buttons[style*=text-decoration] .wp-block-button__link {
        text-decoration: inherit
    }

    .wp-block-buttons.has-custom-font-size .wp-block-button__link {
        font-size: inherit
    }

    .wp-block-button.aligncenter,.wp-block-calendar {
        text-align: center
    }

    .wp-block-calendar td,.wp-block-calendar th {
        border: 1px solid;
        padding: .25em
    }

    .wp-block-calendar th {
        font-weight: 400
    }

    .wp-block-calendar caption {
        background-color: inherit
    }

    .wp-block-calendar table {
        border-collapse: collapse;
        width: 100%
    }

    .wp-block-calendar table:where(:not(.has-text-color)) {
        color: #40464d
    }

    .wp-block-calendar table:where(:not(.has-text-color)) td,.wp-block-calendar table:where(:not(.has-text-color)) th {
        border-color: #ddd
    }

    .wp-block-calendar table.has-background th {
        background-color: inherit
    }

    .wp-block-calendar table.has-text-color th {
        color: inherit
    }

    :where(.wp-block-calendar table:not(.has-background) th) {
        background: #ddd
    }

    .wp-block-categories {
        box-sizing: border-box
    }

    .wp-block-categories.alignleft {
        margin-right: 2em
    }

    .wp-block-categories.alignright {
        margin-left: 2em
    }

    .wp-block-code {
        box-sizing: border-box
    }

    .wp-block-code code {
        display: block;
        font-family: inherit;
        overflow-wrap: break-word;
        white-space: pre-wrap
    }

    .wp-block-columns {
        align-items: normal!important;
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap!important;
        margin-bottom: 1.75em
    }

    @media(min-width: 782px) {
        .wp-block-columns {
            flex-wrap:nowrap!important
        }
    }

    .wp-block-columns.are-vertically-aligned-top {
        align-items: flex-start
    }

    .wp-block-columns.are-vertically-aligned-center {
        align-items: center
    }

    .wp-block-columns.are-vertically-aligned-bottom {
        align-items: flex-end
    }

    @media(max-width: 781px) {
        .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            flex-basis:100%!important
        }
    }

    @media(min-width: 782px) {
        .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
            flex-basis:0;
            flex-grow: 1
        }

        .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }
    }

    .wp-block-columns.is-not-stacked-on-mobile {
        flex-wrap: nowrap!important
    }

    .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
        flex-basis: 0;
        flex-grow: 1
    }

    .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
        flex-grow: 0
    }

    :where(.wp-block-columns.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-column {
        flex-grow: 1;
        min-width: 0;
        overflow-wrap: break-word;
        word-break: break-word
    }

    .wp-block-column.is-vertically-aligned-top {
        align-self: flex-start
    }

    .wp-block-column.is-vertically-aligned-center {
        align-self: center
    }

    .wp-block-column.is-vertically-aligned-bottom {
        align-self: flex-end
    }

    .wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top {
        width: 100%
    }

    .wp-block-post-comments {
        box-sizing: border-box
    }

    .wp-block-post-comments .alignleft {
        float: left
    }

    .wp-block-post-comments .alignright {
        float: right
    }

    .wp-block-post-comments .navigation:after {
        clear: both;
        content: "";
        display: table
    }

    .wp-block-post-comments .commentlist {
        clear: both;
        list-style: none;
        margin: 0;
        padding: 0
    }

    .wp-block-post-comments .commentlist .comment {
        min-height: 2.25em;
        padding-left: 3.25em
    }

    .wp-block-post-comments .commentlist .comment p {
        font-size: 1em;
        line-height: 1.8;
        margin: 1em 0
    }

    .wp-block-post-comments .commentlist .children {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .wp-block-post-comments .comment-author {
        line-height: 1.5
    }

    .wp-block-post-comments .comment-author .avatar {
        border-radius: 1.5em;
        display: block;
        float: left;
        height: 2.5em;
        margin-right: .75em;
        margin-top: .5em;
        width: 2.5em
    }

    .wp-block-post-comments .comment-author cite {
        font-style: normal
    }

    .wp-block-post-comments .comment-meta {
        font-size: .875em;
        line-height: 1.5
    }

    .wp-block-post-comments .comment-meta b {
        font-weight: 400
    }

    .wp-block-post-comments .comment-meta .comment-awaiting-moderation {
        display: block;
        margin-bottom: 1em;
        margin-top: 1em
    }

    .wp-block-post-comments .comment-body .commentmetadata {
        font-size: .875em
    }

    .wp-block-post-comments .comment-form-author label,.wp-block-post-comments .comment-form-comment label,.wp-block-post-comments .comment-form-email label,.wp-block-post-comments .comment-form-url label {
        display: block;
        margin-bottom: .25em
    }

    .wp-block-post-comments .comment-form input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments .comment-form textarea {
        box-sizing: border-box;
        display: block;
        width: 100%
    }

    .wp-block-post-comments .comment-form-cookies-consent {
        display: flex;
        gap: .25em
    }

    .wp-block-post-comments .comment-form-cookies-consent #wp-comment-cookies-consent {
        margin-top: .35em
    }

    .wp-block-post-comments .comment-reply-title {
        margin-bottom: 0
    }

    .wp-block-post-comments .comment-reply-title :where(small) {
        font-size: var(--wp--preset--font-size--medium,smaller);
        margin-left: .5em
    }

    .wp-block-post-comments .reply {
        font-size: .875em;
        margin-bottom: 1.4em
    }

    .wp-block-post-comments input:not([type=submit]),.wp-block-post-comments textarea {
        border: 1px solid #949494;
        font-family: inherit;
        font-size: 1em
    }

    .wp-block-post-comments input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments textarea {
        padding: calc(.667em + 2px)
    }

    :where(.wp-block-post-comments input[type=submit]) {
        border: none
    }

    .wp-block-comments-pagination>.wp-block-comments-pagination-next,.wp-block-comments-pagination>.wp-block-comments-pagination-numbers,.wp-block-comments-pagination>.wp-block-comments-pagination-previous {
        margin-bottom: .5em;
        margin-right: .5em
    }

    .wp-block-comments-pagination>.wp-block-comments-pagination-next:last-child,.wp-block-comments-pagination>.wp-block-comments-pagination-numbers:last-child,.wp-block-comments-pagination>.wp-block-comments-pagination-previous:last-child {
        margin-right: 0
    }

    .wp-block-comments-pagination .wp-block-comments-pagination-previous-arrow {
        display: inline-block;
        margin-right: 1ch
    }

    .wp-block-comments-pagination .wp-block-comments-pagination-previous-arrow:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-comments-pagination .wp-block-comments-pagination-next-arrow {
        display: inline-block;
        margin-left: 1ch
    }

    .wp-block-comments-pagination .wp-block-comments-pagination-next-arrow:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-comments-pagination.aligncenter {
        justify-content: center
    }

    .wp-block-comment-template {
        box-sizing: border-box;
        list-style: none;
        margin-bottom: 0;
        max-width: 100%;
        padding: 0
    }

    .wp-block-comment-template li {
        clear: both
    }

    .wp-block-comment-template ol {
        list-style: none;
        margin-bottom: 0;
        max-width: 100%;
        padding-left: 2rem
    }

    .wp-block-comment-template.alignleft {
        float: left
    }

    .wp-block-comment-template.aligncenter {
        margin-left: auto;
        margin-right: auto;
        width: -moz-fit-content;
        width: fit-content
    }

    .wp-block-comment-template.alignright {
        float: right
    }

    .wp-block-cover,.wp-block-cover-image {
        align-items: center;
        background-position: 50%;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        min-height: 430px;
        padding: 1em;
        position: relative
    }

    .wp-block-cover .has-background-dim:not([class*=-background-color]),.wp-block-cover-image .has-background-dim:not([class*=-background-color]),.wp-block-cover-image.has-background-dim:not([class*=-background-color]),.wp-block-cover.has-background-dim:not([class*=-background-color]) {
        background-color: #000
    }

    .wp-block-cover .has-background-dim.has-background-gradient,.wp-block-cover-image .has-background-dim.has-background-gradient {
        background-color: transparent
    }

    .wp-block-cover-image.has-background-dim:before,.wp-block-cover.has-background-dim:before {
        background-color: inherit;
        content: ""
    }

    .wp-block-cover .wp-block-cover__background,.wp-block-cover .wp-block-cover__gradient-background,.wp-block-cover-image .wp-block-cover__background,.wp-block-cover-image .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim:not(.has-background-gradient):before,.wp-block-cover.has-background-dim:not(.has-background-gradient):before {
        bottom: 0;
        left: 0;
        opacity: .5;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-10:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-10:not(.has-background-gradient):before {
        opacity: .1
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-20:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-20:not(.has-background-gradient):before {
        opacity: .2
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-30:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-30:not(.has-background-gradient):before {
        opacity: .3
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-40:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-40:not(.has-background-gradient):before {
        opacity: .4
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-50:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-50:not(.has-background-gradient):before {
        opacity: .5
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-60:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-60:not(.has-background-gradient):before {
        opacity: .6
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-70:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-70:not(.has-background-gradient):before {
        opacity: .7
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-80:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-80:not(.has-background-gradient):before {
        opacity: .8
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-90:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-90:not(.has-background-gradient):before {
        opacity: .9
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-100:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-100:not(.has-background-gradient):before {
        opacity: 1
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-0,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-0,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0 {
        opacity: 0
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-10,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-10,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10 {
        opacity: .1
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-20,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-20,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20 {
        opacity: .2
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-30,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-30,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30 {
        opacity: .3
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-40,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-40,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40 {
        opacity: .4
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-50,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-50,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50 {
        opacity: .5
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-60,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-60,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60 {
        opacity: .6
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-70,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-70,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70 {
        opacity: .7
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-80,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-80,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80 {
        opacity: .8
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-90,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-90,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90 {
        opacity: .9
    }

    .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-100,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-100,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100 {
        opacity: 1
    }

    .wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.alignleft,.wp-block-cover.alignright {
        max-width: 420px;
        width: 100%
    }

    .wp-block-cover-image:after,.wp-block-cover:after {
        content: "";
        display: block;
        font-size: 0;
        min-height: inherit
    }

    @supports(position: sticky) {
        .wp-block-cover-image:after,.wp-block-cover:after {
            content:none
        }
    }

    .wp-block-cover-image.aligncenter,.wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.aligncenter,.wp-block-cover.alignleft,.wp-block-cover.alignright {
        display: flex
    }

    .wp-block-cover .wp-block-cover__inner-container,.wp-block-cover-image .wp-block-cover__inner-container {
        color: #fff;
        width: 100%;
        z-index: 1
    }

    .wp-block-cover-image.is-light .wp-block-cover__inner-container,.wp-block-cover.is-light .wp-block-cover__inner-container {
        color: #000
    }

    .wp-block-cover h1:not(.has-text-color),.wp-block-cover h2:not(.has-text-color),.wp-block-cover h3:not(.has-text-color),.wp-block-cover h4:not(.has-text-color),.wp-block-cover h5:not(.has-text-color),.wp-block-cover h6:not(.has-text-color),.wp-block-cover p:not(.has-text-color),.wp-block-cover-image h1:not(.has-text-color),.wp-block-cover-image h2:not(.has-text-color),.wp-block-cover-image h3:not(.has-text-color),.wp-block-cover-image h4:not(.has-text-color),.wp-block-cover-image h5:not(.has-text-color),.wp-block-cover-image h6:not(.has-text-color),.wp-block-cover-image p:not(.has-text-color) {
        color: inherit
    }

    .wp-block-cover-image.is-position-top-left,.wp-block-cover.is-position-top-left {
        align-items: flex-start;
        justify-content: flex-start
    }

    .wp-block-cover-image.is-position-top-center,.wp-block-cover.is-position-top-center {
        align-items: flex-start;
        justify-content: center
    }

    .wp-block-cover-image.is-position-top-right,.wp-block-cover.is-position-top-right {
        align-items: flex-start;
        justify-content: flex-end
    }

    .wp-block-cover-image.is-position-center-left,.wp-block-cover.is-position-center-left {
        align-items: center;
        justify-content: flex-start
    }

    .wp-block-cover-image.is-position-center-center,.wp-block-cover.is-position-center-center {
        align-items: center;
        justify-content: center
    }

    .wp-block-cover-image.is-position-center-right,.wp-block-cover.is-position-center-right {
        align-items: center;
        justify-content: flex-end
    }

    .wp-block-cover-image.is-position-bottom-left,.wp-block-cover.is-position-bottom-left {
        align-items: flex-end;
        justify-content: flex-start
    }

    .wp-block-cover-image.is-position-bottom-center,.wp-block-cover.is-position-bottom-center {
        align-items: flex-end;
        justify-content: center
    }

    .wp-block-cover-image.is-position-bottom-right,.wp-block-cover.is-position-bottom-right {
        align-items: flex-end;
        justify-content: flex-end
    }

    .wp-block-cover-image.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container {
        margin: 0;
        width: auto
    }

    .wp-block-cover .wp-block-cover__image-background,.wp-block-cover video.wp-block-cover__video-background,.wp-block-cover-image .wp-block-cover__image-background,.wp-block-cover-image video.wp-block-cover__video-background {
        border: none;
        bottom: 0;
        box-shadow: none;
        height: 100%;
        left: 0;
        margin: 0;
        max-height: none;
        max-width: none;
        -o-object-fit: cover;
        object-fit: cover;
        outline: none;
        padding: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%
    }

    .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover
    }

    @supports(-webkit-overflow-scrolling:touch) {
        .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
            background-attachment: scroll
        }
    }

    @media(prefers-reduced-motion:reduce) {
        .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
            background-attachment: scroll
        }
    }

    .wp-block-cover-image.is-repeated,.wp-block-cover.is-repeated,.wp-block-cover__image-background.is-repeated,video.wp-block-cover__video-background.is-repeated {
        background-repeat: repeat;
        background-size: auto
    }

    .wp-block-cover__image-background,.wp-block-cover__video-background {
        z-index: 0
    }

    .wp-block-cover-image-text,.wp-block-cover-image-text a,.wp-block-cover-image-text a:active,.wp-block-cover-image-text a:focus,.wp-block-cover-image-text a:hover,.wp-block-cover-text,.wp-block-cover-text a,.wp-block-cover-text a:active,.wp-block-cover-text a:focus,.wp-block-cover-text a:hover,section.wp-block-cover-image h2,section.wp-block-cover-image h2 a,section.wp-block-cover-image h2 a:active,section.wp-block-cover-image h2 a:focus,section.wp-block-cover-image h2 a:hover {
        color: #fff
    }

    .wp-block-cover-image .wp-block-cover.has-left-content {
        justify-content: flex-start
    }

    .wp-block-cover-image .wp-block-cover.has-right-content {
        justify-content: flex-end
    }

    .wp-block-cover-image.has-left-content .wp-block-cover-image-text,.wp-block-cover.has-left-content .wp-block-cover-text,section.wp-block-cover-image.has-left-content>h2 {
        margin-left: 0;
        text-align: left
    }

    .wp-block-cover-image.has-right-content .wp-block-cover-image-text,.wp-block-cover.has-right-content .wp-block-cover-text,section.wp-block-cover-image.has-right-content>h2 {
        margin-right: 0;
        text-align: right
    }

    .wp-block-cover .wp-block-cover-text,.wp-block-cover-image .wp-block-cover-image-text,section.wp-block-cover-image>h2 {
        font-size: 2em;
        line-height: 1.25;
        margin-bottom: 0;
        max-width: 840px;
        padding: .44em;
        text-align: center;
        z-index: 1
    }

    .wp-block-embed.alignleft,.wp-block-embed.alignright,.wp-block[data-align=left]>[data-type="core/embed"],.wp-block[data-align=right]>[data-type="core/embed"] {
        max-width: 360px;
        width: 100%
    }

    .wp-block-embed.alignleft .wp-block-embed__wrapper,.wp-block-embed.alignright .wp-block-embed__wrapper,.wp-block[data-align=left]>[data-type="core/embed"] .wp-block-embed__wrapper,.wp-block[data-align=right]>[data-type="core/embed"] .wp-block-embed__wrapper {
        min-width: 280px
    }

    .wp-block-cover .wp-block-embed {
        min-height: 240px;
        min-width: 320px
    }

    .wp-block-embed {
        overflow-wrap: break-word
    }

    .wp-block-embed figcaption {
        margin-bottom: 1em;
        margin-top: .5em
    }

    .wp-block-embed iframe {
        max-width: 100%
    }

    .wp-block-embed__wrapper {
        position: relative
    }

    .wp-embed-responsive .wp-has-aspect-ratio .wp-block-embed__wrapper:before {
        content: "";
        display: block;
        padding-top: 50%
    }

    .wp-embed-responsive .wp-has-aspect-ratio iframe {
        bottom: 0;
        height: 100%;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%
    }

    .wp-embed-responsive .wp-embed-aspect-21-9 .wp-block-embed__wrapper:before {
        padding-top: 42.85%
    }

    .wp-embed-responsive .wp-embed-aspect-18-9 .wp-block-embed__wrapper:before {
        padding-top: 50%
    }

    .wp-embed-responsive .wp-embed-aspect-16-9 .wp-block-embed__wrapper:before {
        padding-top: 56.25%
    }

    .wp-embed-responsive .wp-embed-aspect-4-3 .wp-block-embed__wrapper:before {
        padding-top: 75%
    }

    .wp-embed-responsive .wp-embed-aspect-1-1 .wp-block-embed__wrapper:before {
        padding-top: 100%
    }

    .wp-embed-responsive .wp-embed-aspect-9-16 .wp-block-embed__wrapper:before {
        padding-top: 177.77%
    }

    .wp-embed-responsive .wp-embed-aspect-1-2 .wp-block-embed__wrapper:before {
        padding-top: 200%
    }

    .wp-block-file {
        margin-bottom: 1.5em
    }

    .wp-block-file:not(.wp-element-button) {
        font-size: .8em
    }

    .wp-block-file.aligncenter {
        text-align: center
    }

    .wp-block-file.alignright {
        text-align: right
    }

    .wp-block-file *+.wp-block-file__button {
        margin-left: .75em
    }

    .wp-block-file__embed {
        margin-bottom: 1em
    }

    :where(.wp-block-file__button) {
        border-radius: 2em;
        padding: .5em 1em
    }

    :where(.wp-block-file__button):is(a):active,:where(.wp-block-file__button):is(a):focus,:where(.wp-block-file__button):is(a):hover,:where(.wp-block-file__button):is(a):visited {
        box-shadow: none;
        color: #fff;
        opacity: .85;
        text-decoration: none
    }

    .blocks-gallery-grid:not(.has-nested-images),.wp-block-gallery:not(.has-nested-images) {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: center;
        margin: 0 1em 1em 0;
        position: relative;
        width: calc(50% - 1em)
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n) {
        margin-right: 0
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figure,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figure {
        align-items: flex-end;
        display: flex;
        height: 100%;
        justify-content: flex-start;
        margin: 0
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item img {
        display: block;
        height: auto;
        max-width: 100%;
        width: auto
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption {
        background: linear-gradient(0deg,rgba(0,0,0,.7),rgba(0,0,0,.3) 70%,transparent);
        bottom: 0;
        box-sizing: border-box;
        color: #fff;
        font-size: .8em;
        margin: 0;
        max-height: 100%;
        overflow: auto;
        padding: 3em .77em .7em;
        position: absolute;
        text-align: center;
        width: 100%;
        z-index: 2
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption img {
        display: inline
    }

    .blocks-gallery-grid:not(.has-nested-images) figcaption,.wp-block-gallery:not(.has-nested-images) figcaption {
        flex-grow: 1
    }

    .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item img {
        flex: 1;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item {
        margin-right: 0;
        width: 100%
    }

    @media(min-width: 600px) {
        .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item {
            margin-right:1em;
            width: calc(33.33333% - .66667em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item {
            margin-right: 1em;
            width: calc(25% - .75em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item {
            margin-right: 1em;
            width: calc(20% - .8em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item {
            margin-right: 1em;
            width: calc(16.66667% - .83333em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item {
            margin-right: 1em;
            width: calc(14.28571% - .85714em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item {
            margin-right: 1em;
            width: calc(12.5% - .875em)
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n) {
            margin-right: 0
        }
    }

    .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:last-child,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:last-child {
        margin-right: 0
    }

    .blocks-gallery-grid:not(.has-nested-images).alignleft,.blocks-gallery-grid:not(.has-nested-images).alignright,.wp-block-gallery:not(.has-nested-images).alignleft,.wp-block-gallery:not(.has-nested-images).alignright {
        max-width: 420px;
        width: 100%
    }

    .blocks-gallery-grid:not(.has-nested-images).aligncenter .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images).aligncenter .blocks-gallery-item figure {
        justify-content: center
    }

    .wp-block-gallery:not(.is-cropped) .blocks-gallery-item {
        align-self: flex-start
    }

    figure.wp-block-gallery.has-nested-images {
        align-items: normal
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image:not(#individual-image) {
        margin: 0;
        width: calc(50% - var(--wp--style--unstable-gallery-gap,16px)/2)
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image {
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: center;
        max-width: 100%;
        position: relative
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image>a,.wp-block-gallery.has-nested-images figure.wp-block-image>div {
        flex-direction: column;
        flex-grow: 1;
        margin: 0
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image img {
        display: block;
        height: auto;
        max-width: 100%!important;
        width: auto
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
        background: linear-gradient(0deg,rgba(0,0,0,.7),rgba(0,0,0,.3) 70%,transparent);
        bottom: 0;
        box-sizing: border-box;
        color: #fff;
        font-size: 13px;
        left: 0;
        margin-bottom: 0;
        max-height: 60%;
        overflow: auto;
        padding: 0 8px 8px;
        position: absolute;
        text-align: center;
        width: 100%
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image figcaption img {
        display: inline
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image figcaption a {
        color: inherit
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border img {
        box-sizing: border-box
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>a,.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>div,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>a,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>div {
        flex: 1 1 auto
    }

    .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border figcaption,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded figcaption {
        background: 0 0;
        color: inherit;
        flex: initial;
        margin: 0;
        padding: 10px 10px 9px;
        position: relative
    }

    .wp-block-gallery.has-nested-images figcaption {
        flex-basis: 100%;
        flex-grow: 1;
        text-align: center
    }

    .wp-block-gallery.has-nested-images:not(.is-cropped) figure.wp-block-image:not(#individual-image) {
        margin-bottom: auto;
        margin-top: 0
    }

    .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) {
        align-self: inherit
    }

    .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>div:not(.components-drop-zone) {
        display: flex
    }

    .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) img {
        flex: 1 0 0%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%
    }

    .wp-block-gallery.has-nested-images.columns-1 figure.wp-block-image:not(#individual-image) {
        width: 100%
    }

    @media(min-width: 600px) {
        .wp-block-gallery.has-nested-images.columns-3 figure.wp-block-image:not(#individual-image) {
            width:calc(33.33333% - var(--wp--style--unstable-gallery-gap,16px)*.66667)
        }

        .wp-block-gallery.has-nested-images.columns-4 figure.wp-block-image:not(#individual-image) {
            width: calc(25% - var(--wp--style--unstable-gallery-gap,16px)*.75)
        }

        .wp-block-gallery.has-nested-images.columns-5 figure.wp-block-image:not(#individual-image) {
            width: calc(20% - var(--wp--style--unstable-gallery-gap,16px)*.8)
        }

        .wp-block-gallery.has-nested-images.columns-6 figure.wp-block-image:not(#individual-image) {
            width: calc(16.66667% - var(--wp--style--unstable-gallery-gap,16px)*.83333)
        }

        .wp-block-gallery.has-nested-images.columns-7 figure.wp-block-image:not(#individual-image) {
            width: calc(14.28571% - var(--wp--style--unstable-gallery-gap,16px)*.85714)
        }

        .wp-block-gallery.has-nested-images.columns-8 figure.wp-block-image:not(#individual-image) {
            width: calc(12.5% - var(--wp--style--unstable-gallery-gap,16px)*.875)
        }

        .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image) {
            width: calc(33.33% - var(--wp--style--unstable-gallery-gap,16px)*.66667)
        }

        .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2),.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2)~figure.wp-block-image:not(#individual-image) {
            width: calc(50% - var(--wp--style--unstable-gallery-gap,16px)*.5)
        }

        .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:last-child {
            width: 100%
        }
    }

    .wp-block-gallery.has-nested-images.alignleft,.wp-block-gallery.has-nested-images.alignright {
        max-width: 420px;
        width: 100%
    }

    .wp-block-gallery.has-nested-images.aligncenter {
        justify-content: center
    }

    .wp-block-group {
        box-sizing: border-box
    }

    h1.has-background,h2.has-background,h3.has-background,h4.has-background,h5.has-background,h6.has-background {
        padding: 1.25em 2.375em
    }

    .wp-block-image img {
        height: auto;
        max-width: 100%;
        vertical-align: bottom
    }

    .wp-block-image img,.wp-block-image.has-custom-border img {
        box-sizing: border-box
    }

    .wp-block-image.aligncenter {
        text-align: center
    }

    .wp-block-image.alignfull img,.wp-block-image.alignwide img {
        height: auto;
        width: 100%
    }

    .wp-block-image .aligncenter,.wp-block-image .alignleft,.wp-block-image .alignright,.wp-block-image.aligncenter,.wp-block-image.alignleft,.wp-block-image.alignright {
        display: table
    }

    .wp-block-image .aligncenter>figcaption,.wp-block-image .alignleft>figcaption,.wp-block-image .alignright>figcaption,.wp-block-image.aligncenter>figcaption,.wp-block-image.alignleft>figcaption,.wp-block-image.alignright>figcaption {
        caption-side: bottom;
        display: table-caption
    }

    .wp-block-image .alignleft {
        float: left;
        margin: .5em 1em .5em 0
    }

    .wp-block-image .alignright {
        float: right;
        margin: .5em 0 .5em 1em
    }

    .wp-block-image .aligncenter {
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-image figcaption {
        margin-bottom: 1em;
        margin-top: .5em
    }

    .wp-block-image .is-style-rounded img,.wp-block-image.is-style-circle-mask img,.wp-block-image.is-style-rounded img {
        border-radius: 9999px
    }

    @supports((-webkit-mask-image: none) or (mask-image:none)) or (-webkit-mask-image:none) {
        .wp-block-image.is-style-circle-mask img {
            border-radius:0;
            -webkit-mask-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSI1MCIvPjwvc3ZnPg==);
            mask-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSI1MCIvPjwvc3ZnPg==);
            mask-mode: alpha;
            -webkit-mask-position: center;
            mask-position: center;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-size: contain;
            mask-size: contain
        }
    }

    .wp-block-image :where(.has-border-color) {
        border-style: solid
    }

    .wp-block-image :where([style*=border-top-color]) {
        border-top-style: solid
    }

    .wp-block-image :where([style*=border-right-color]) {
        border-right-style: solid
    }

    .wp-block-image :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    .wp-block-image :where([style*=border-left-color]) {
        border-left-style: solid
    }

    .wp-block-image :where([style*=border-width]) {
        border-style: solid
    }

    .wp-block-image :where([style*=border-top-width]) {
        border-top-style: solid
    }

    .wp-block-image :where([style*=border-right-width]) {
        border-right-style: solid
    }

    .wp-block-image :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    .wp-block-image :where([style*=border-left-width]) {
        border-left-style: solid
    }

    .wp-block-image figure {
        margin: 0
    }

    ol.wp-block-latest-comments {
        box-sizing: border-box;
        margin-left: 0
    }

    .wp-block-latest-comments .wp-block-latest-comments {
        padding-left: 0
    }

    .wp-block-latest-comments__comment {
        line-height: 1.1;
        list-style: none;
        margin-bottom: 1em
    }

    .has-avatars .wp-block-latest-comments__comment {
        list-style: none;
        min-height: 2.25em
    }

    .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt,.has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
        margin-left: 3.25em
    }

    .has-dates .wp-block-latest-comments__comment,.has-excerpts .wp-block-latest-comments__comment {
        line-height: 1.5
    }

    .wp-block-latest-comments__comment-excerpt p {
        font-size: .875em;
        line-height: 1.8;
        margin: .36em 0 1.4em
    }

    .wp-block-latest-comments__comment-date {
        display: block;
        font-size: .75em
    }

    .wp-block-latest-comments .avatar,.wp-block-latest-comments__comment-avatar {
        border-radius: 1.5em;
        display: block;
        float: left;
        height: 2.5em;
        margin-right: .75em;
        width: 2.5em
    }

    .wp-block-latest-posts {
        box-sizing: border-box
    }

    .wp-block-latest-posts.alignleft {
        margin-right: 2em
    }

    .wp-block-latest-posts.alignright {
        margin-left: 2em
    }

    .wp-block-latest-posts.wp-block-latest-posts__list {
        list-style: none;
        padding-left: 0
    }

    .wp-block-latest-posts.wp-block-latest-posts__list li {
        clear: both
    }

    .wp-block-latest-posts.is-grid {
        display: flex;
        flex-wrap: wrap;
        padding: 0
    }

    .wp-block-latest-posts.is-grid li {
        margin: 0 1.25em 1.25em 0;
        width: 100%
    }

    @media(min-width: 600px) {
        .wp-block-latest-posts.columns-2 li {
            width:calc(50% - .625em)
        }

        .wp-block-latest-posts.columns-2 li:nth-child(2n) {
            margin-right: 0
        }

        .wp-block-latest-posts.columns-3 li {
            width: calc(33.33333% - .83333em)
        }

        .wp-block-latest-posts.columns-3 li:nth-child(3n) {
            margin-right: 0
        }

        .wp-block-latest-posts.columns-4 li {
            width: calc(25% - .9375em)
        }

        .wp-block-latest-posts.columns-4 li:nth-child(4n) {
            margin-right: 0
        }

        .wp-block-latest-posts.columns-5 li {
            width: calc(20% - 1em)
        }

        .wp-block-latest-posts.columns-5 li:nth-child(5n) {
            margin-right: 0
        }

        .wp-block-latest-posts.columns-6 li {
            width: calc(16.66667% - 1.04167em)
        }

        .wp-block-latest-posts.columns-6 li:nth-child(6n) {
            margin-right: 0
        }
    }

    .wp-block-latest-posts__post-author,.wp-block-latest-posts__post-date {
        display: block;
        font-size: .8125em
    }

    .wp-block-latest-posts__post-excerpt {
        margin-bottom: 1em;
        margin-top: .5em
    }

    .wp-block-latest-posts__featured-image a {
        display: inline-block
    }

    .wp-block-latest-posts__featured-image img {
        height: auto;
        max-width: 100%;
        width: auto
    }

    .wp-block-latest-posts__featured-image.alignleft {
        float: left;
        margin-right: 1em
    }

    .wp-block-latest-posts__featured-image.alignright {
        float: right;
        margin-left: 1em
    }

    .wp-block-latest-posts__featured-image.aligncenter {
        margin-bottom: 1em;
        text-align: center
    }

    ol,ul {
        box-sizing: border-box
    }

    ol.has-background,ul.has-background {
        padding: 1.25em 2.375em
    }

    .wp-block-media-text {
        box-sizing: border-box;
        direction: ltr;
        display: grid;
        grid-template-columns: 50% 1fr;
        grid-template-rows: auto
    }

    .wp-block-media-text.has-media-on-the-right {
        grid-template-columns: 1fr 50%
    }

    .wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__content,.wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__media {
        align-self: start
    }

    .wp-block-media-text .wp-block-media-text__content,.wp-block-media-text .wp-block-media-text__media,.wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__content,.wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__media {
        align-self: center
    }

    .wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__content,.wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__media {
        align-self: end
    }

    .wp-block-media-text .wp-block-media-text__media {
        grid-column: 1;
        grid-row: 1;
        margin: 0
    }

    .wp-block-media-text .wp-block-media-text__content {
        direction: ltr;
        grid-column: 2;
        grid-row: 1;
        padding: 0 8%;
        word-break: break-word
    }

    .wp-block-media-text.has-media-on-the-right .wp-block-media-text__media {
        grid-column: 2;
        grid-row: 1
    }

    .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
        grid-column: 1;
        grid-row: 1
    }

    .wp-block-media-text__media img,.wp-block-media-text__media video {
        height: auto;
        max-width: unset;
        vertical-align: middle;
        width: 100%
    }

    .wp-block-media-text.is-image-fill .wp-block-media-text__media {
        background-size: cover;
        height: 100%;
        min-height: 250px
    }

    .wp-block-media-text.is-image-fill .wp-block-media-text__media>a {
        display: block;
        height: 100%
    }

    .wp-block-media-text.is-image-fill .wp-block-media-text__media img {
        clip: rect(0,0,0,0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    @media(max-width: 600px) {
        .wp-block-media-text.is-stacked-on-mobile {
            grid-template-columns:100%!important
        }

        .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__media {
            grid-column: 1;
            grid-row: 1
        }

        .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__content {
            grid-column: 1;
            grid-row: 2
        }
    }

    .wp-block-navigation {
        --navigation-layout-justification-setting: flex-start;
        --navigation-layout-direction: row;
        --navigation-layout-wrap: wrap;
        --navigation-layout-justify: flex-start;
        --navigation-layout-align: center;
        position: relative
    }

    .wp-block-navigation ul {
        margin-bottom: 0;
        margin-left: 0;
        margin-top: 0;
        padding-left: 0
    }

    .wp-block-navigation ul,.wp-block-navigation ul li {
        list-style: none;
        padding: 0
    }

    .wp-block-navigation .wp-block-navigation-item {
        align-items: center;
        display: flex;
        position: relative
    }

    .wp-block-navigation .wp-block-navigation-item .wp-block-navigation__submenu-container:empty {
        display: none
    }

    .wp-block-navigation .wp-block-navigation-item__content {
        display: block
    }

    .wp-block-navigation .wp-block-navigation-item__content.wp-block-navigation-item__content {
        color: inherit
    }

    .wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content,.wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content:active,.wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content:focus {
        text-decoration: underline
    }

    .wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content,.wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content:active,.wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content:focus {
        text-decoration: line-through
    }

    .wp-block-navigation:where(:not([class*=has-text-decoration])) a {
        text-decoration: none
    }

    .wp-block-navigation:where(:not([class*=has-text-decoration])) a:active,.wp-block-navigation:where(:not([class*=has-text-decoration])) a:focus {
        text-decoration: none
    }

    .wp-block-navigation .wp-block-navigation__submenu-icon {
        align-self: center;
        background-color: inherit;
        border: none;
        color: currentColor;
        display: inline-block;
        font-size: inherit;
        height: .6em;
        line-height: 0;
        margin-left: .25em;
        padding: 0;
        width: .6em
    }

    .wp-block-navigation .wp-block-navigation__submenu-icon svg {
        stroke: currentColor;
        display: inline-block;
        height: inherit;
        margin-top: .075em;
        width: inherit
    }

    .wp-block-navigation.is-vertical {
        --navigation-layout-direction: column;
        --navigation-layout-justify: initial;
        --navigation-layout-align: flex-start
    }

    .wp-block-navigation.no-wrap {
        --navigation-layout-wrap: nowrap
    }

    .wp-block-navigation.items-justified-center {
        --navigation-layout-justification-setting: center;
        --navigation-layout-justify: center
    }

    .wp-block-navigation.items-justified-center.is-vertical {
        --navigation-layout-align: center
    }

    .wp-block-navigation.items-justified-right {
        --navigation-layout-justification-setting: flex-end;
        --navigation-layout-justify: flex-end
    }

    .wp-block-navigation.items-justified-right.is-vertical {
        --navigation-layout-align: flex-end
    }

    .wp-block-navigation.items-justified-space-between {
        --navigation-layout-justification-setting: space-between;
        --navigation-layout-justify: space-between
    }

    .wp-block-navigation .has-child .wp-block-navigation__submenu-container {
        align-items: normal;
        background-color: inherit;
        color: inherit;
        display: flex;
        flex-direction: column;
        height: 0;
        left: -1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        top: 100%;
        transition: opacity .1s linear;
        visibility: hidden;
        width: 0;
        z-index: 2
    }

    .wp-block-navigation .has-child .wp-block-navigation__submenu-container>.wp-block-navigation-item>.wp-block-navigation-item__content {
        display: flex;
        flex-grow: 1
    }

    .wp-block-navigation .has-child .wp-block-navigation__submenu-container>.wp-block-navigation-item>.wp-block-navigation-item__content .wp-block-navigation__submenu-icon {
        margin-left: auto;
        margin-right: 0
    }

    .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation-item__content {
        margin: 0
    }

    @media(min-width: 782px) {
        .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
            left:100%;
            top: -1px
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container:before {
            background: 0 0;
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            right: 100%;
            width: .5em
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-icon {
            margin-right: .25em
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-icon svg {
            transform: rotate(-90deg)
        }
    }

    .wp-block-navigation .has-child:not(.open-on-click):hover>.wp-block-navigation__submenu-container {
        height: auto;
        min-width: 200px;
        opacity: 1;
        overflow: visible;
        visibility: visible;
        width: auto
    }

    .wp-block-navigation .has-child:not(.open-on-click):not(.open-on-hover-click):focus-within>.wp-block-navigation__submenu-container {
        height: auto;
        min-width: 200px;
        opacity: 1;
        overflow: visible;
        visibility: visible;
        width: auto
    }

    .wp-block-navigation .has-child .wp-block-navigation-submenu__toggle[aria-expanded=true]~.wp-block-navigation__submenu-container {
        height: auto;
        min-width: 200px;
        opacity: 1;
        overflow: visible;
        visibility: visible;
        width: auto
    }

    .wp-block-navigation.has-background .has-child .wp-block-navigation__submenu-container {
        left: 0;
        top: 100%
    }

    @media(min-width: 782px) {
        .wp-block-navigation.has-background .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
            left:100%;
            top: 0
        }
    }

    .wp-block-navigation-submenu {
        display: flex;
        position: relative
    }

    .wp-block-navigation-submenu .wp-block-navigation__submenu-icon svg {
        stroke: currentColor
    }

    button.wp-block-navigation-item__content {
        background-color: transparent;
        border: none;
        color: currentColor;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        line-height: inherit;
        text-align: left;
        text-transform: inherit
    }

    .wp-block-navigation-submenu__toggle {
        cursor: pointer
    }

    .wp-block-navigation-item.open-on-click .wp-block-navigation-submenu__toggle {
        padding-right: .85em
    }

    .wp-block-navigation-item.open-on-click .wp-block-navigation-submenu__toggle+.wp-block-navigation__submenu-icon {
        margin-left: -.6em;
        pointer-events: none
    }

    .wp-block-navigation .wp-block-page-list,.wp-block-navigation__container,.wp-block-navigation__responsive-close,.wp-block-navigation__responsive-container,.wp-block-navigation__responsive-container-content,.wp-block-navigation__responsive-dialog {
        gap: inherit
    }

    :where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)) {
        padding: .5em 1em
    }

    :where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu button.wp-block-navigation-item__content),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-pages-list__item button.wp-block-navigation-item__content) {
        padding: .5em 1em
    }

    .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container {
        left: auto;
        right: 0
    }

    .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
        left: -1px;
        right: -1px
    }

    @media(min-width: 782px) {
        .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,.wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
            left:auto;
            right: 100%
        }
    }

    .wp-block-navigation:not(.has-background) .wp-block-navigation__submenu-container {
        background-color: #fff;
        border: 1px solid rgba(0,0,0,.15);
        color: #000
    }

    .wp-block-navigation__container {
        align-items: var(--navigation-layout-align,initial);
        display: flex;
        flex-direction: var(--navigation-layout-direction,initial);
        flex-wrap: var(--navigation-layout-wrap,wrap);
        justify-content: var(--navigation-layout-justify,initial);
        list-style: none;
        margin: 0;
        padding-left: 0
    }

    .wp-block-navigation__container .is-responsive {
        display: none
    }

    .wp-block-navigation__container:only-child,.wp-block-page-list:only-child {
        flex-grow: 1
    }

    @keyframes overlay-menu__fade-in-animation {
        0% {
            opacity: 0;
            transform: translateY(.5em)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .wp-block-navigation__responsive-container {
        bottom: 0;
        display: none;
        left: 0;
        position: fixed;
        right: 0;
        top: 0
    }

    .wp-block-navigation__responsive-container .wp-block-navigation-link a {
        color: inherit
    }

    .wp-block-navigation__responsive-container .wp-block-navigation__responsive-container-content {
        align-items: var(--navigation-layout-align,initial);
        display: flex;
        flex-direction: var(--navigation-layout-direction,initial);
        flex-wrap: var(--navigation-layout-wrap,wrap);
        justify-content: var(--navigation-layout-justify,initial)
    }

    .wp-block-navigation__responsive-container:not(.is-menu-open.is-menu-open) {
        background-color: inherit!important;
        color: inherit!important
    }

    .wp-block-navigation__responsive-container.is-menu-open {
        animation: overlay-menu__fade-in-animation .1s ease-out;
        animation-fill-mode: forwards;
        background-color: inherit;
        display: flex;
        flex-direction: column;
        overflow: auto;
        padding: var(--wp--style--root--padding-top,2rem) var(--wp--style--root--padding-right,2rem) var(--wp--style--root--padding-bottom,2rem) var(--wp--style--root--padding-left,2rem);
        z-index: 100000
    }

    @media(prefers-reduced-motion:reduce) {
        .wp-block-navigation__responsive-container.is-menu-open {
            animation-delay: 0s;
            animation-duration: 1ms
        }
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content {
        align-items: var(--navigation-layout-justification-setting,inherit);
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        overflow: visible;
        padding-top: calc(2rem + 24px)
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-page-list {
        justify-content: flex-start
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-icon {
        display: none
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .has-child .wp-block-navigation__submenu-container {
        border: none;
        height: auto;
        min-width: 200px;
        opacity: 1;
        overflow: initial;
        padding-left: 2rem;
        padding-right: 2rem;
        position: static;
        visibility: visible;
        width: auto
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-container {
        gap: inherit
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-container {
        padding-top: var(--wp--style--block-gap,2em)
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item__content {
        padding: 0
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-page-list {
        align-items: var(--navigation-layout-justification-setting,initial);
        display: flex;
        flex-direction: column
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item,.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item .wp-block-navigation__submenu-container,.wp-block-navigation__responsive-container.is-menu-open .wp-block-page-list {
        background: 0 0!important;
        color: inherit!important
    }

    .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container {
        left: auto;
        right: auto
    }

    @media(min-width: 600px) {
        .wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) {
            background-color:inherit;
            display: block;
            position: relative;
            width: 100%;
            z-index: auto
        }

        .wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) .wp-block-navigation__responsive-container-close {
            display: none
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container {
            left: 0
        }
    }

    .wp-block-navigation:not(.has-background) .wp-block-navigation__responsive-container.is-menu-open {
        background-color: #fff;
        color: #000
    }

    .wp-block-navigation__toggle_button_label {
        font-size: 1rem;
        font-weight: 700
    }

    .wp-block-navigation__responsive-container-close,.wp-block-navigation__responsive-container-open {
        background: 0 0;
        border: none;
        color: currentColor;
        cursor: pointer;
        margin: 0;
        padding: 0;
        text-transform: inherit;
        vertical-align: middle
    }

    .wp-block-navigation__responsive-container-close svg,.wp-block-navigation__responsive-container-open svg {
        fill: currentColor;
        display: block;
        height: 24px;
        pointer-events: none;
        width: 24px
    }

    .wp-block-navigation__responsive-container-open {
        display: flex
    }

    .wp-block-navigation__responsive-container-open.wp-block-navigation__responsive-container-open.wp-block-navigation__responsive-container-open {
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit
    }

    @media(min-width: 600px) {
        .wp-block-navigation__responsive-container-open:not(.always-shown) {
            display:none
        }
    }

    .wp-block-navigation__responsive-container-close {
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2
    }

    .wp-block-navigation__responsive-container-close.wp-block-navigation__responsive-container-close.wp-block-navigation__responsive-container-close {
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit
    }

    .wp-block-navigation__responsive-close {
        margin-left: auto;
        margin-right: auto;
        max-width: var(--wp--style--global--wide-size,100%);
        width: 100%
    }

    .wp-block-navigation__responsive-close:focus {
        outline: none
    }

    .is-menu-open .wp-block-navigation__responsive-close,.is-menu-open .wp-block-navigation__responsive-container-content,.is-menu-open .wp-block-navigation__responsive-dialog {
        box-sizing: border-box
    }

    .wp-block-navigation__responsive-dialog {
        position: relative
    }

    .has-modal-open .admin-bar .is-menu-open .wp-block-navigation__responsive-dialog {
        margin-top: 46px
    }

    @media(min-width: 782px) {
        .has-modal-open .admin-bar .is-menu-open .wp-block-navigation__responsive-dialog {
            margin-top:32px
        }
    }

    html.has-modal-open {
        overflow: hidden
    }

    .wp-block-navigation .wp-block-navigation-item__label {
        overflow-wrap: break-word;
        word-break: normal
    }

    .wp-block-navigation .wp-block-navigation-item__description {
        display: none
    }

    .wp-block-navigation .wp-block-page-list {
        align-items: var(--navigation-layout-align,initial);
        background-color: inherit;
        display: flex;
        flex-direction: var(--navigation-layout-direction,initial);
        flex-wrap: var(--navigation-layout-wrap,wrap);
        justify-content: var(--navigation-layout-justify,initial)
    }

    .wp-block-navigation .wp-block-navigation-item {
        background-color: inherit
    }

    .is-small-text {
        font-size: .875em
    }

    .is-regular-text {
        font-size: 1em
    }

    .is-large-text {
        font-size: 2.25em
    }

    .is-larger-text {
        font-size: 3em
    }

    .has-drop-cap:not(:focus):first-letter {
        float: left;
        font-size: 8.4em;
        font-style: normal;
        font-weight: 100;
        line-height: .68;
        margin: .05em .1em 0 0;
        text-transform: uppercase
    }

    body.rtl .has-drop-cap:not(:focus):first-letter {
        float: none;
        margin-left: .1em
    }

    p.has-drop-cap.has-background {
        overflow: hidden
    }

    p.has-background {
        padding: 1.25em 2.375em
    }

    :where(p.has-text-color:not(.has-link-color)) a {
        color: inherit
    }

    .wp-block-post-author {
        display: flex;
        flex-wrap: wrap
    }

    .wp-block-post-author__byline {
        font-size: .5em;
        margin-bottom: 0;
        margin-top: 0;
        width: 100%
    }

    .wp-block-post-author__avatar {
        margin-right: 1em
    }

    .wp-block-post-author__bio {
        font-size: .7em;
        margin-bottom: .7em
    }

    .wp-block-post-author__content {
        flex-basis: 0;
        flex-grow: 1
    }

    .wp-block-post-author__name {
        margin: 0
    }

    .wp-block-post-comments-form {
        box-sizing: border-box
    }

    .wp-block-post-comments-form[style*=font-weight] :where(.comment-reply-title) {
        font-weight: inherit
    }

    .wp-block-post-comments-form[style*=font-family] :where(.comment-reply-title) {
        font-family: inherit
    }

    .wp-block-post-comments-form[class*=-font-size] :where(.comment-reply-title),.wp-block-post-comments-form[style*=font-size] :where(.comment-reply-title) {
        font-size: inherit
    }

    .wp-block-post-comments-form[style*=line-height] :where(.comment-reply-title) {
        line-height: inherit
    }

    .wp-block-post-comments-form[style*=font-style] :where(.comment-reply-title) {
        font-style: inherit
    }

    .wp-block-post-comments-form[style*=letter-spacing] :where(.comment-reply-title) {
        letter-spacing: inherit
    }

    .wp-block-post-comments-form input[type=submit] {
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        overflow-wrap: break-word;
        text-align: center
    }

    .wp-block-post-comments-form input:not([type=submit]),.wp-block-post-comments-form textarea {
        border: 1px solid #949494;
        font-family: inherit;
        font-size: 1em
    }

    .wp-block-post-comments-form input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments-form textarea {
        padding: calc(.667em + 2px)
    }

    .wp-block-post-comments-form .comment-form input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments-form .comment-form textarea {
        box-sizing: border-box;
        display: block;
        width: 100%
    }

    .wp-block-post-comments-form .comment-form-author label,.wp-block-post-comments-form .comment-form-email label,.wp-block-post-comments-form .comment-form-url label {
        display: block;
        margin-bottom: .25em
    }

    .wp-block-post-comments-form .comment-form-cookies-consent {
        display: flex;
        gap: .25em
    }

    .wp-block-post-comments-form .comment-form-cookies-consent #wp-comment-cookies-consent {
        margin-top: .35em
    }

    .wp-block-post-comments-form .comment-reply-title {
        margin-bottom: 0
    }

    .wp-block-post-comments-form .comment-reply-title :where(small) {
        font-size: var(--wp--preset--font-size--medium,smaller);
        margin-left: .5em
    }

    .wp-block-post-date {
        box-sizing: border-box
    }

    .wp-block-post-excerpt {
        margin-bottom: var(--wp--style--block-gap);
        margin-top: var(--wp--style--block-gap)
    }

    .wp-block-post-excerpt__excerpt {
        margin-bottom: 0;
        margin-top: 0
    }

    .wp-block-post-excerpt__more-text {
        margin-bottom: 0;
        margin-top: var(--wp--style--block-gap)
    }

    .wp-block-post-excerpt__more-link {
        display: inline-block
    }

    .wp-block-post-featured-image {
        margin-left: 0;
        margin-right: 0
    }

    .wp-block-post-featured-image a {
        display: block
    }

    .wp-block-post-featured-image img {
        box-sizing: border-box;
        height: auto;
        max-width: 100%;
        vertical-align: bottom;
        width: 100%
    }

    .wp-block-post-featured-image.alignfull img,.wp-block-post-featured-image.alignwide img {
        width: 100%
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim {
        background-color: #000;
        inset: 0;
        position: absolute
    }

    .wp-block-post-featured-image {
        position: relative
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-gradient {
        background-color: transparent
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-0 {
        opacity: 0
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-10 {
        opacity: .1
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-20 {
        opacity: .2
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-30 {
        opacity: .3
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-40 {
        opacity: .4
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-50 {
        opacity: .5
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-60 {
        opacity: .6
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-70 {
        opacity: .7
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-80 {
        opacity: .8
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-90 {
        opacity: .9
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-100 {
        opacity: 1
    }

    .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-previous {
        display: inline-block;
        margin-right: 1ch
    }

    .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-previous:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-next {
        display: inline-block;
        margin-left: 1ch
    }

    .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-next:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-post-terms {
        box-sizing: border-box
    }

    .wp-block-post-terms .wp-block-post-terms__separator {
        white-space: pre-wrap
    }

    .wp-block-post-title {
        box-sizing: border-box;
        word-break: break-word
    }

    .wp-block-post-title a {
        display: inline-block
    }

    .wp-block-preformatted {
        white-space: pre-wrap
    }

    .wp-block-preformatted.has-background {
        padding: 1.25em 2.375em
    }

    .wp-block-pullquote {
        box-sizing: border-box;
        margin: 0 0 1em;
        overflow-wrap: break-word;
        padding: 3em 0;
        text-align: center
    }

    .wp-block-pullquote blockquote,.wp-block-pullquote cite,.wp-block-pullquote p {
        color: inherit
    }

    .wp-block-pullquote.alignleft,.wp-block-pullquote.alignright {
        max-width: 420px
    }

    .wp-block-pullquote cite,.wp-block-pullquote footer {
        position: relative
    }

    .wp-block-pullquote .has-text-color a {
        color: inherit
    }

    .wp-block-pullquote.has-text-align-left blockquote {
        text-align: left
    }

    .wp-block-pullquote.has-text-align-right blockquote {
        text-align: right
    }

    .wp-block-pullquote.is-style-solid-color {
        border: none
    }

    .wp-block-pullquote.is-style-solid-color blockquote {
        margin-left: auto;
        margin-right: auto;
        max-width: 60%
    }

    .wp-block-pullquote.is-style-solid-color blockquote p {
        font-size: 2em;
        margin-bottom: 0;
        margin-top: 0
    }

    .wp-block-pullquote.is-style-solid-color blockquote cite {
        font-style: normal;
        text-transform: none
    }

    .wp-block-pullquote cite {
        color: inherit
    }

    .wp-block-post-template {
        list-style: none;
        margin-bottom: 0;
        margin-top: 0;
        max-width: 100%;
        padding: 0
    }

    .wp-block-post-template.wp-block-post-template {
        background: 0 0
    }

    .wp-block-post-template.is-flex-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 1.25em
    }

    .wp-block-post-template.is-flex-container li {
        margin: 0;
        width: 100%
    }

    @media(min-width: 600px) {
        .wp-block-post-template.is-flex-container.is-flex-container.columns-2>li {
            width:calc(50% - .625em)
        }

        .wp-block-post-template.is-flex-container.is-flex-container.columns-3>li {
            width: calc(33.33333% - .83333em)
        }

        .wp-block-post-template.is-flex-container.is-flex-container.columns-4>li {
            width: calc(25% - .9375em)
        }

        .wp-block-post-template.is-flex-container.is-flex-container.columns-5>li {
            width: calc(20% - 1em)
        }

        .wp-block-post-template.is-flex-container.is-flex-container.columns-6>li {
            width: calc(16.66667% - 1.04167em)
        }
    }

    .wp-block-query-pagination>.wp-block-query-pagination-next,.wp-block-query-pagination>.wp-block-query-pagination-numbers,.wp-block-query-pagination>.wp-block-query-pagination-previous {
        margin-bottom: .5em;
        margin-right: .5em
    }

    .wp-block-query-pagination>.wp-block-query-pagination-next:last-child,.wp-block-query-pagination>.wp-block-query-pagination-numbers:last-child,.wp-block-query-pagination>.wp-block-query-pagination-previous:last-child {
        margin-right: 0
    }

    .wp-block-query-pagination.is-content-justification-space-between>.wp-block-query-pagination-next:last-of-type {
        margin-inline-start:auto}

    .wp-block-query-pagination.is-content-justification-space-between>.wp-block-query-pagination-previous:first-child {
        margin-inline-end:auto}

    .wp-block-query-pagination .wp-block-query-pagination-previous-arrow {
        display: inline-block;
        margin-right: 1ch
    }

    .wp-block-query-pagination .wp-block-query-pagination-previous-arrow:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-query-pagination .wp-block-query-pagination-next-arrow {
        display: inline-block;
        margin-left: 1ch
    }

    .wp-block-query-pagination .wp-block-query-pagination-next-arrow:not(.is-arrow-chevron) {
        transform: scaleX(1)
    }

    .wp-block-query-pagination.aligncenter {
        justify-content: center
    }

    .wp-block-query-title,.wp-block-quote {
        box-sizing: border-box
    }

    .wp-block-quote {
        overflow-wrap: break-word
    }

    .wp-block-quote.is-large:where(:not(.is-style-plain)),.wp-block-quote.is-style-large:where(:not(.is-style-plain)) {
        margin-bottom: 1em;
        padding: 0 1em
    }

    .wp-block-quote.is-large:where(:not(.is-style-plain)) p,.wp-block-quote.is-style-large:where(:not(.is-style-plain)) p {
        font-size: 1.5em;
        font-style: italic;
        line-height: 1.6
    }

    .wp-block-quote.is-large:where(:not(.is-style-plain)) cite,.wp-block-quote.is-large:where(:not(.is-style-plain)) footer,.wp-block-quote.is-style-large:where(:not(.is-style-plain)) cite,.wp-block-quote.is-style-large:where(:not(.is-style-plain)) footer {
        font-size: 1.125em;
        text-align: right
    }

    .wp-block-read-more {
        display: block;
        width: -moz-fit-content;
        width: fit-content
    }

    .wp-block-read-more:not([style*=text-decoration]),.wp-block-read-more:not([style*=text-decoration]):active,.wp-block-read-more:not([style*=text-decoration]):focus {
        text-decoration: none
    }

    ul.wp-block-rss {
        list-style: none;
        padding: 0
    }

    ul.wp-block-rss.wp-block-rss {
        box-sizing: border-box
    }

    ul.wp-block-rss.alignleft {
        margin-right: 2em
    }

    ul.wp-block-rss.alignright {
        margin-left: 2em
    }

    ul.wp-block-rss.is-grid {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0
    }

    ul.wp-block-rss.is-grid li {
        margin: 0 1em 1em 0;
        width: 100%
    }

    @media(min-width: 600px) {
        ul.wp-block-rss.columns-2 li {
            width:calc(50% - 1em)
        }

        ul.wp-block-rss.columns-3 li {
            width: calc(33.33333% - 1em)
        }

        ul.wp-block-rss.columns-4 li {
            width: calc(25% - 1em)
        }

        ul.wp-block-rss.columns-5 li {
            width: calc(20% - 1em)
        }

        ul.wp-block-rss.columns-6 li {
            width: calc(16.66667% - 1em)
        }
    }

    .wp-block-rss__item-author,.wp-block-rss__item-publish-date {
        display: block;
        font-size: .8125em
    }

    .wp-block-search__button {
        margin-left: .625em;
        word-break: normal
    }

    .wp-block-search__button.has-icon {
        line-height: 0
    }

    .wp-block-search__button svg {
        fill: currentColor;
        min-height: 1.5em;
        min-width: 1.5em;
        vertical-align: text-bottom
    }

    :where(.wp-block-search__button) {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    .wp-block-search__inside-wrapper {
        display: flex;
        flex: auto;
        flex-wrap: nowrap;
        max-width: 100%
    }

    .wp-block-search__label {
        width: 100%
    }

    .wp-block-search__input {
        border: 1px solid #949494;
        flex-grow: 1;
        margin-left: 0;
        margin-right: 0;
        min-width: 3em;
        padding: 8px;
        text-decoration: unset!important
    }

    .wp-block-search.wp-block-search__button-only .wp-block-search__button {
        margin-left: 0
    }

    :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) {
        border: 1px solid #949494;
        padding: 4px
    }

    :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input {
        border: none;
        border-radius: 0;
        padding: 0 0 0 .25em
    }

    :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus {
        outline: none
    }

    :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button) {
        padding: .125em .5em
    }

    .wp-block-search.aligncenter .wp-block-search__inside-wrapper {
        margin: auto
    }

    .wp-block-separator {
        border: 1px solid;
        border-left: none;
        border-right: none
    }

    .wp-block-separator.is-style-dots {
        background: 0 0!important;
        border: none;
        height: auto;
        line-height: 1;
        text-align: center
    }

    .wp-block-separator.is-style-dots:before {
        color: currentColor;
        content: "···";
        font-family: serif;
        font-size: 1.5em;
        letter-spacing: 2em;
        padding-left: 2em
    }

    .wp-block-site-logo {
        box-sizing: border-box;
        line-height: 0
    }

    .wp-block-site-logo a {
        display: inline-block
    }

    .wp-block-site-logo.is-default-size img {
        height: auto;
        width: 120px
    }

    .wp-block-site-logo img {
        height: auto;
        max-width: 100%
    }

    .wp-block-site-logo a,.wp-block-site-logo img {
        border-radius: inherit
    }

    .wp-block-site-logo.aligncenter {
        margin-left: auto;
        margin-right: auto;
        text-align: center
    }

    .wp-block-site-logo.is-style-rounded {
        border-radius: 9999px
    }

    .wp-block-site-title a {
        color: inherit
    }

    .wp-block-social-links {
        background: 0 0;
        box-sizing: border-box;
        margin-left: 0;
        padding-left: 0;
        padding-right: 0;
        text-indent: 0
    }

    .wp-block-social-links .wp-social-link a,.wp-block-social-links .wp-social-link a:hover {
        border-bottom: 0;
        box-shadow: none;
        text-decoration: none
    }

    .wp-block-social-links .wp-social-link a {
        padding: .25em
    }

    .wp-block-social-links .wp-social-link svg {
        height: 1em;
        width: 1em
    }

    .wp-block-social-links .wp-social-link span:not(.screen-reader-text) {
        font-size: .65em;
        margin-left: .5em;
        margin-right: .5em
    }

    .wp-block-social-links.has-small-icon-size {
        font-size: 16px
    }

    .wp-block-social-links,.wp-block-social-links.has-normal-icon-size {
        font-size: 24px
    }

    .wp-block-social-links.has-large-icon-size {
        font-size: 36px
    }

    .wp-block-social-links.has-huge-icon-size {
        font-size: 48px
    }

    .wp-block-social-links.aligncenter {
        display: flex;
        justify-content: center
    }

    .wp-block-social-links.alignright {
        justify-content: flex-end
    }

    .wp-block-social-link {
        border-radius: 9999px;
        display: block;
        height: auto;
        transition: transform .1s ease
    }

    @media(prefers-reduced-motion:reduce) {
        .wp-block-social-link {
            transition-delay: 0s;
            transition-duration: 0s
        }
    }

    .wp-block-social-link a {
        align-items: center;
        display: flex;
        line-height: 0;
        transition: transform .1s ease
    }

    .wp-block-social-link:hover {
        transform: scale(1.1)
    }

    .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor,.wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor svg,.wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:active,.wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:hover,.wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:visited {
        fill: currentColor;
        color: currentColor
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link {
        background-color: #f0f0f0;
        color: #444
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-amazon {
        background-color: #f90;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-bandcamp {
        background-color: #1ea0c3;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-behance {
        background-color: #0757fe;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-codepen {
        background-color: #1e1f26;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-deviantart {
        background-color: #02e49b;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dribbble {
        background-color: #e94c89;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dropbox {
        background-color: #4280ff;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-etsy {
        background-color: #f45800;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-facebook {
        background-color: #1778f2;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-fivehundredpx {
        background-color: #000;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-flickr {
        background-color: #0461dd;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-foursquare {
        background-color: #e65678;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-github {
        background-color: #24292d;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-goodreads {
        background-color: #eceadd;
        color: #382110
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-google {
        background-color: #ea4434;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-instagram {
        background-color: #f00075;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-lastfm {
        background-color: #e21b24;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-linkedin {
        background-color: #0d66c2;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-mastodon {
        background-color: #3288d4;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-medium {
        background-color: #02ab6c;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-meetup {
        background-color: #f6405f;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-patreon {
        background-color: #ff424d;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pinterest {
        background-color: #e60122;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pocket {
        background-color: #ef4155;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-reddit {
        background-color: #ff4500;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-skype {
        background-color: #0478d7;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-snapchat {
        stroke: #000;
        background-color: #fefc00;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-soundcloud {
        background-color: #ff5600;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-spotify {
        background-color: #1bd760;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-telegram {
        background-color: #2aabee;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-tiktok {
        background-color: #000;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-tumblr {
        background-color: #011835;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitch {
        background-color: #6440a4;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitter {
        background-color: #1da1f2;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vimeo {
        background-color: #1eb7ea;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vk {
        background-color: #4680c2;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-wordpress {
        background-color: #3499cd;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-whatsapp {
        background-color: #25d366;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-yelp {
        background-color: #d32422;
        color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-youtube {
        background-color: red;
        color: #fff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link {
        background: 0 0
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link a {
        padding: 0
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link svg {
        height: 1.25em;
        width: 1.25em
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-amazon {
        color: #f90
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-bandcamp {
        color: #1ea0c3
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-behance {
        color: #0757fe
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-codepen {
        color: #1e1f26
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-deviantart {
        color: #02e49b
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-dribbble {
        color: #e94c89
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-dropbox {
        color: #4280ff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-etsy {
        color: #f45800
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-facebook {
        color: #1778f2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-fivehundredpx {
        color: #000
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-flickr {
        color: #0461dd
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-foursquare {
        color: #e65678
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-github {
        color: #24292d
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-goodreads {
        color: #382110
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-google {
        color: #ea4434
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-instagram {
        color: #f00075
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-lastfm {
        color: #e21b24
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-linkedin {
        color: #0d66c2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-mastodon {
        color: #3288d4
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-medium {
        color: #02ab6c
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-meetup {
        color: #f6405f
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-patreon {
        color: #ff424d
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-pinterest {
        color: #e60122
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-pocket {
        color: #ef4155
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-reddit {
        color: #ff4500
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-skype {
        color: #0478d7
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-snapchat {
        stroke: #000;
        color: #fff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-soundcloud {
        color: #ff5600
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-spotify {
        color: #1bd760
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-telegram {
        color: #2aabee
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-tiktok {
        color: #000
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-tumblr {
        color: #011835
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-twitch {
        color: #6440a4
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-twitter {
        color: #1da1f2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-vimeo {
        color: #1eb7ea
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-vk {
        color: #4680c2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-whatsapp {
        color: #25d366
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-wordpress {
        color: #3499cd
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-yelp {
        color: #d32422
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-youtube {
        color: red
    }

    .wp-block-social-links.is-style-pill-shape .wp-social-link {
        width: auto
    }

    .wp-block-social-links.is-style-pill-shape .wp-social-link a {
        padding-left: .66667em;
        padding-right: .66667em
    }

    .wp-block-spacer {
        clear: both
    }

    .wp-block-tag-cloud {
        box-sizing: border-box
    }

    .wp-block-tag-cloud.aligncenter {
        justify-content: center;
        text-align: center
    }

    .wp-block-tag-cloud.alignfull {
        padding-left: 1em;
        padding-right: 1em
    }

    .wp-block-tag-cloud a {
        display: inline-block;
        margin-right: 5px
    }

    .wp-block-tag-cloud span {
        display: inline-block;
        margin-left: 5px;
        text-decoration: none
    }

    .wp-block-tag-cloud.is-style-outline {
        display: flex;
        flex-wrap: wrap;
        gap: 1ch
    }

    .wp-block-tag-cloud.is-style-outline a {
        border: 1px solid;
        font-size: unset!important;
        margin-right: 0;
        padding: 1ch 2ch;
        text-decoration: none!important
    }

    .wp-block-table {
        overflow-x: auto
    }

    .wp-block-table table {
        border-collapse: collapse;
        width: 100%
    }

    .wp-block-table thead {
        border-bottom: 3px solid
    }

    .wp-block-table tfoot {
        border-top: 3px solid
    }

    .wp-block-table td,.wp-block-table th {
        border: 1px solid;
        padding: .5em
    }

    .wp-block-table .has-fixed-layout {
        table-layout: fixed;
        width: 100%
    }

    .wp-block-table .has-fixed-layout td,.wp-block-table .has-fixed-layout th {
        word-break: break-word
    }

    .wp-block-table.aligncenter,.wp-block-table.alignleft,.wp-block-table.alignright {
        display: table;
        width: auto
    }

    .wp-block-table.aligncenter td,.wp-block-table.aligncenter th,.wp-block-table.alignleft td,.wp-block-table.alignleft th,.wp-block-table.alignright td,.wp-block-table.alignright th {
        word-break: break-word
    }

    .wp-block-table .has-subtle-light-gray-background-color {
        background-color: #f3f4f5
    }

    .wp-block-table .has-subtle-pale-green-background-color {
        background-color: #e9fbe5
    }

    .wp-block-table .has-subtle-pale-blue-background-color {
        background-color: #e7f5fe
    }

    .wp-block-table .has-subtle-pale-pink-background-color {
        background-color: #fcf0ef
    }

    .wp-block-table.is-style-stripes {
        background-color: transparent;
        border-bottom: 1px solid #f0f0f0;
        border-collapse: inherit;
        border-spacing: 0
    }

    .wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
        background-color: #f0f0f0
    }

    .wp-block-table.is-style-stripes.has-subtle-light-gray-background-color tbody tr:nth-child(odd) {
        background-color: #f3f4f5
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-green-background-color tbody tr:nth-child(odd) {
        background-color: #e9fbe5
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-blue-background-color tbody tr:nth-child(odd) {
        background-color: #e7f5fe
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-pink-background-color tbody tr:nth-child(odd) {
        background-color: #fcf0ef
    }

    .wp-block-table.is-style-stripes td,.wp-block-table.is-style-stripes th {
        border-color: transparent
    }

    .wp-block-table .has-border-color td,.wp-block-table .has-border-color th,.wp-block-table .has-border-color tr,.wp-block-table .has-border-color>* {
        border-color: inherit
    }

    .wp-block-table table[style*=border-top-color] tr:first-child,.wp-block-table table[style*=border-top-color] tr:first-child td,.wp-block-table table[style*=border-top-color] tr:first-child th,.wp-block-table table[style*=border-top-color]>*,.wp-block-table table[style*=border-top-color]>* td,.wp-block-table table[style*=border-top-color]>* th {
        border-top-color: inherit
    }

    .wp-block-table table[style*=border-top-color] tr:not(:first-child) {
        border-top-color: currentColor
    }

    .wp-block-table table[style*=border-right-color] td:last-child,.wp-block-table table[style*=border-right-color] th,.wp-block-table table[style*=border-right-color] tr,.wp-block-table table[style*=border-right-color]>* {
        border-right-color: inherit
    }

    .wp-block-table table[style*=border-bottom-color] tr:last-child,.wp-block-table table[style*=border-bottom-color] tr:last-child td,.wp-block-table table[style*=border-bottom-color] tr:last-child th,.wp-block-table table[style*=border-bottom-color]>*,.wp-block-table table[style*=border-bottom-color]>* td,.wp-block-table table[style*=border-bottom-color]>* th {
        border-bottom-color: inherit
    }

    .wp-block-table table[style*=border-bottom-color] tr:not(:last-child) {
        border-bottom-color: currentColor
    }

    .wp-block-table table[style*=border-left-color] td:first-child,.wp-block-table table[style*=border-left-color] th,.wp-block-table table[style*=border-left-color] tr,.wp-block-table table[style*=border-left-color]>* {
        border-left-color: inherit
    }

    .wp-block-table table[style*=border-style] td,.wp-block-table table[style*=border-style] th,.wp-block-table table[style*=border-style] tr,.wp-block-table table[style*=border-style]>* {
        border-style: inherit
    }

    .wp-block-table table[style*=border-width] td,.wp-block-table table[style*=border-width] th,.wp-block-table table[style*=border-width] tr,.wp-block-table table[style*=border-width]>* {
        border-style: inherit;
        border-width: inherit
    }

    .wp-block-text-columns,.wp-block-text-columns.aligncenter {
        display: flex
    }

    .wp-block-text-columns .wp-block-column {
        margin: 0 1em;
        padding: 0
    }

    .wp-block-text-columns .wp-block-column:first-child {
        margin-left: 0
    }

    .wp-block-text-columns .wp-block-column:last-child {
        margin-right: 0
    }

    .wp-block-text-columns.columns-2 .wp-block-column {
        width: 50%
    }

    .wp-block-text-columns.columns-3 .wp-block-column {
        width: 33.33333%
    }

    .wp-block-text-columns.columns-4 .wp-block-column {
        width: 25%
    }

    pre.wp-block-verse {
        overflow: auto;
        white-space: pre-wrap
    }

    :where(pre.wp-block-verse) {
        font-family: inherit
    }

    .wp-block-video {
        box-sizing: border-box
    }

    .wp-block-video video {
        width: 100%
    }

    @supports(position: sticky) {
        .wp-block-video [poster] {
            -o-object-fit:cover;
            object-fit: cover
        }
    }

    .wp-block-video.aligncenter {
        text-align: center
    }

    .wp-block-video figcaption {
        margin-bottom: 1em;
        margin-top: .5em
    }

    .wp-element-button {
        cursor: pointer
    }

    :root {
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 42px
    }

    :root .has-very-light-gray-background-color {
        background-color: #eee
    }

    :root .has-very-dark-gray-background-color {
        background-color: #313131
    }

    :root .has-very-light-gray-color {
        color: #eee
    }

    :root .has-very-dark-gray-color {
        color: #313131
    }

    :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
        background: linear-gradient(135deg,#00d084,#0693e3)
    }

    :root .has-purple-crush-gradient-background {
        background: linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)
    }

    :root .has-hazy-dawn-gradient-background {
        background: linear-gradient(135deg,#faaca8,#dad0ec)
    }

    :root .has-subdued-olive-gradient-background {
        background: linear-gradient(135deg,#fafae1,#67a671)
    }

    :root .has-atomic-cream-gradient-background {
        background: linear-gradient(135deg,#fdd79a,#004a59)
    }

    :root .has-nightshade-gradient-background {
        background: linear-gradient(135deg,#330968,#31cdcf)
    }

    :root .has-midnight-gradient-background {
        background: linear-gradient(135deg,#020381,#2874fc)
    }

    .has-regular-font-size {
        font-size: 1em
    }

    .has-larger-font-size {
        font-size: 2.625em
    }

    .has-normal-font-size {
        font-size: var(--wp--preset--font-size--normal)
    }

    .has-huge-font-size {
        font-size: var(--wp--preset--font-size--huge)
    }

    .has-text-align-center {
        text-align: center
    }

    .has-text-align-left {
        text-align: left
    }

    .has-text-align-right {
        text-align: right
    }

    #end-resizable-editor-section {
        display: none
    }

    .aligncenter {
        clear: both
    }

    .items-justified-left {
        justify-content: flex-start
    }

    .items-justified-center {
        justify-content: center
    }

    .items-justified-right {
        justify-content: flex-end
    }

    .items-justified-space-between {
        justify-content: space-between
    }

    .screen-reader-text {
        clip: rect(1px,1px,1px,1px);
        word-wrap: normal!important;
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .screen-reader-text:focus {
        clip: auto!important;
        background-color: #ddd;
        -webkit-clip-path: none;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000
    }

    html :where(.has-border-color) {
        border-style: solid
    }

    html :where([style*=border-top-color]) {
        border-top-style: solid
    }

    html :where([style*=border-right-color]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-color]) {
        border-left-style: solid
    }

    html :where([style*=border-width]) {
        border-style: solid
    }

    html :where([style*=border-top-width]) {
        border-top-style: solid
    }

    html :where([style*=border-right-width]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-width]) {
        border-left-style: solid
    }

    html :where(img[class*=wp-image-]) {
        height: auto;
        max-width: 100%
    }

    figure {
        margin: 0 0 1em
    }

    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height,0px)
    }

    @media screen and (max-width: 600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset:0px
        }
    }
}

@media all {
    .safe-svg-cover .safe-svg-inside {
        display: inline-block;
        max-width: 100%
    }

    .safe-svg-cover svg {
        height: 100%;
        max-height: 100%;
        max-width: 100%;
        width: 100%
    }
}

@media all {
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
}

@media all {
    body {
        --wp--preset--color--black: #000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #fff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0,#9b51e0 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,#7adcb4 0,#00d082 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0,rgba(255,105,0,1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0,#cf2e2e 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,#eee 0,#a9b8c3 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,#4aeadc 0,#9778d1 20%,#cf2aba 40%,#ee2c82 60%,#fb6962 80%,#fef84c 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,#ffceec 0,#9896f0 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,#fecda5 0,#fe2d2d 50%,#6b003e 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,#ffcb70 0,#c751c0 50%,#4158d0 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg,#fff5cb 0,#b6e3d4 50%,#33a7b5 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg,#caf880 0,#71ce7e 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg,#020381 0,#2874fc 100%);
        --wp--preset--duotone--dark-grayscale: url(//cleanzen.com/#wp-duotone-dark-grayscale);
        --wp--preset--duotone--grayscale: url(//cleanzen.com/#wp-duotone-grayscale);
        --wp--preset--duotone--purple-yellow: url(//cleanzen.com/#wp-duotone-purple-yellow);
        --wp--preset--duotone--blue-red: url(//cleanzen.com/#wp-duotone-blue-red);
        --wp--preset--duotone--midnight: url(//cleanzen.com/#wp-duotone-midnight);
        --wp--preset--duotone--magenta-yellow: url(//cleanzen.com/#wp-duotone-magenta-yellow);
        --wp--preset--duotone--purple-green: url(//cleanzen.com/#wp-duotone-purple-green);
        --wp--preset--duotone--blue-orange: url(//cleanzen.com/#wp-duotone-blue-orange);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: .44rem;
        --wp--preset--spacing--30: .67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0,0,0,.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0,0,0,.4);
        --wp--preset--shadow--sharp: 6px 6px 0 rgba(0,0,0,.2);
        --wp--preset--shadow--outlined: 6px 6px 0 -3px rgba(255,255,255,1),6px 6px rgba(0,0,0,1);
        --wp--preset--shadow--crisp: 6px 6px 0 rgba(0,0,0,1)
    }

    :where(.is-layout-flex) {
        gap: .5em
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start:0;margin-inline-end:2em}

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start:2em;margin-inline-end:0}

    body .is-layout-flow>.aligncenter {
        margin-left: auto!important;
        margin-right: auto!important
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start:0;margin-inline-end:2em}

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start:2em;margin-inline-end:0}

    body .is-layout-constrained>.aligncenter {
        margin-left: auto!important;
        margin-right: auto!important
    }

    body .is-layout-constrained>:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto!important;
        margin-right: auto!important
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size)
    }

    body .is-layout-flex {
        display: flex
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center
    }

    body .is-layout-flex>* {
        margin: 0
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em
    }

    .has-black-color {
        color: var(--wp--preset--color--black)!important
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray)!important
    }

    .has-white-color {
        color: var(--wp--preset--color--white)!important
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink)!important
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red)!important
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange)!important
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber)!important
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan)!important
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan)!important
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue)!important
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue)!important
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple)!important
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black)!important
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray)!important
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white)!important
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink)!important
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red)!important
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange)!important
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber)!important
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan)!important
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan)!important
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue)!important
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue)!important
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple)!important
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black)!important
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray)!important
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white)!important
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink)!important
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red)!important
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange)!important
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber)!important
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan)!important
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan)!important
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue)!important
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue)!important
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple)!important
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple)!important
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan)!important
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange)!important
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red)!important
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray)!important
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum)!important
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple)!important
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux)!important
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk)!important
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean)!important
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass)!important
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight)!important
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small)!important
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium)!important
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large)!important
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large)!important
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6
    }
}

@media all {
    .wp-pagenavi {
        clear: both
    }

    .wp-pagenavi a,.wp-pagenavi span {
        text-decoration: none;
        border: 1px solid #bfbfbf;
        padding: 3px 5px;
        margin: 2px
    }

    .wp-pagenavi a:hover,.wp-pagenavi span.current {
        border-color: #000
    }

    .wp-pagenavi span.current {
        font-weight: 700
    }
}

@media all {
    @font-face {
        font-family: avenir;
        src: url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.eot);
        src: local('Avenir-Heavy'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.eot?#iefix) format('embedded-opentype'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.woff2) format('woff2'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.woff) format('woff'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.ttf) format('truetype'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Heavy.svg) format('svg');
        font-weight: 700;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: avenir;
        src: url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.eot);
        src: local('Avenir-Roman'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.eot?#iefix) format('embedded-opentype'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.woff2) format('woff2'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.woff) format('woff'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.ttf) format('truetype'),url(//cleanzen.com/wp-content/themes/cleanzen/assets/fonts/Avenir-Roman.svg) format('svg');
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
        display: block
    }

    audio,canvas,progress,video {
        display: inline-block;
        vertical-align: baseline
    }

    audio:not([controls]) {
        display: none;
        height: 0
    }

    [hidden],template {
        display: none
    }

    a {
        background-color: transparent
    }

    a:active,a:hover {
        outline: 0
    }

    abbr[title] {
        border-bottom: 1px dotted
    }

    b,strong {
        font-weight: 700
    }

    dfn {
        font-style: italic
    }

    h1 {
        font-size: 2em;
        margin: .67em 0
    }

    mark {
        background: #ff0;
        color: #000
    }

    small {
        font-size: 80%
    }

    sub,sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sup {
        top: -.5em
    }

    sub {
        bottom: -.25em
    }

    img {
        border: 0
    }

    svg:not(:root) {
        overflow: hidden
    }

    figure {
        margin: 1em 40px
    }

    hr {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        height: 0
    }

    pre {
        overflow: auto
    }

    code,kbd,pre,samp {
        font-family: monospace,monospace;
        font-size: 1em
    }

    button,input,optgroup,select,textarea {
        color: inherit;
        font: inherit;
        margin: 0
    }

    button {
        overflow: visible
    }

    button,select {
        text-transform: none
    }

    button,html input[type=button],input[type=reset],input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }

    button[disabled],html input[disabled] {
        cursor: default
    }

    button::-moz-focus-inner,input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    input {
        line-height: normal
    }

    input[type=checkbox],input[type=radio] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0
    }

    input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
        height: auto
    }

    input[type=search] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
        box-sizing: content-box
    }

    input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    fieldset {
        border: 1px solid silver;
        margin: 0 2px;
        padding: .35em .625em .75em
    }

    legend {
        border: 0;
        padding: 0
    }

    textarea {
        overflow: auto
    }

    optgroup {
        font-weight: 700
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    td,th {
        padding: 0
    }

    body.fancybox-active {
        overflow: hidden
    }

    body.fancybox-iosfix {
        position: fixed;
        left: 0;
        right: 0
    }

    .fancybox-is-hidden {
        position: absolute;
        top: -9999px;
        left: -9999px;
        visibility: hidden
    }

    .fancybox-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99992;
        -webkit-tap-highlight-color: transparent;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        font-family: -apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol
    }

    .fancybox-outer,.fancybox-inner,.fancybox-bg,.fancybox-stage {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .fancybox-outer {
        overflow-y: auto;
        -webkit-overflow-scrolling: touch
    }

    .fancybox-bg {
        background: #1e1e1e;
        opacity: 0;
        -webkit-transition-duration: inherit;
        -o-transition-duration: inherit;
        transition-duration: inherit;
        -webkit-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        -webkit-transition-timing-function: cubic-bezier(.47,0,.74,.71);
        -o-transition-timing-function: cubic-bezier(.47,0,.74,.71);
        transition-timing-function: cubic-bezier(.47,0,.74,.71)
    }

    .fancybox-is-open .fancybox-bg {
        opacity: .87;
        -webkit-transition-timing-function: cubic-bezier(.22,.61,.36,1);
        -o-transition-timing-function: cubic-bezier(.22,.61,.36,1);
        transition-timing-function: cubic-bezier(.22,.61,.36,1)
    }

    .fancybox-infobar,.fancybox-toolbar,.fancybox-caption-wrap {
        position: absolute;
        direction: ltr;
        z-index: 99997;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity .25s,visibility 0s linear .25s;
        -o-transition: opacity .25s,visibility 0s linear .25s;
        transition: opacity .25s,visibility 0s linear .25s;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .fancybox-show-infobar .fancybox-infobar,.fancybox-show-toolbar .fancybox-toolbar,.fancybox-show-caption .fancybox-caption-wrap {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity .25s,visibility 0s;
        -o-transition: opacity .25s,visibility 0s;
        transition: opacity .25s,visibility 0s
    }

    .fancybox-infobar {
        top: 0;
        left: 0;
        font-size: 13px;
        padding: 0 10px;
        height: 44px;
        min-width: 44px;
        line-height: 44px;
        color: #ccc;
        text-align: center;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-font-smoothing: subpixel-antialiased;
        mix-blend-mode: exclusion
    }

    .fancybox-toolbar {
        top: 0;
        right: 0;
        margin: 0;
        padding: 0
    }

    .fancybox-stage {
        overflow: hidden;
        direction: ltr;
        z-index: 99994;
        -webkit-transform: translate3d(0,0,0)
    }

    .fancybox-is-closing .fancybox-stage {
        overflow: visible
    }

    .fancybox-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: auto;
        outline: 0;
        white-space: normal;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        z-index: 99994;
        -webkit-overflow-scrolling: touch;
        display: none;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition-property: opacity,-webkit-transform;
        -webkit-transition-property: opacity,-webkit-transform;
        -o-transition-property: transform,opacity;
        transition-property: transform,opacity;
        transition-property: transform,opacity,-webkit-transform
    }

    .fancybox-slide::before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        height: 100%;
        width: 0
    }

    .fancybox-is-sliding .fancybox-slide,.fancybox-slide--previous,.fancybox-slide--current,.fancybox-slide--next {
        display: block
    }

    .fancybox-slide--image {
        overflow: visible
    }

    .fancybox-slide--image::before {
        display: none
    }

    .fancybox-slide--video .fancybox-content,.fancybox-slide--video iframe {
        background: #000
    }

    .fancybox-slide--map .fancybox-content,.fancybox-slide--map iframe {
        background: #e5e3df
    }

    .fancybox-slide--next {
        z-index: 99995
    }

    .fancybox-slide>* {
        display: inline-block;
        position: relative;
        padding: 24px;
        margin: 44px 0;
        border-width: 0;
        vertical-align: middle;
        text-align: left;
        background-color: #fff;
        overflow: auto;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .fancybox-slide>title,.fancybox-slide>style,.fancybox-slide>meta,.fancybox-slide>link,.fancybox-slide>script,.fancybox-slide>base {
        display: none
    }

    .fancybox-slide .fancybox-image-wrap {
        position: absolute;
        top: 0;
        left: 0;
        margin: 0;
        padding: 0;
        border: 0;
        z-index: 99995;
        background: 0 0;
        cursor: default;
        overflow: visible;
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-background-size: 100% 100%;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition-property: opacity,-webkit-transform;
        -webkit-transition-property: opacity,-webkit-transform;
        -o-transition-property: transform,opacity;
        transition-property: transform,opacity;
        transition-property: transform,opacity,-webkit-transform
    }

    .fancybox-can-zoomOut .fancybox-image-wrap {
        cursor: -webkit-zoom-out;
        cursor: zoom-out
    }

    .fancybox-can-zoomIn .fancybox-image-wrap {
        cursor: -webkit-zoom-in;
        cursor: zoom-in
    }

    .fancybox-can-drag .fancybox-image-wrap {
        cursor: -webkit-grab;
        cursor: grab
    }

    .fancybox-is-dragging .fancybox-image-wrap {
        cursor: -webkit-grabbing;
        cursor: grabbing
    }

    .fancybox-image,.fancybox-spaceball {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        border: 0;
        max-width: none;
        max-height: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .fancybox-spaceball {
        z-index: 1
    }

    .fancybox-slide--iframe .fancybox-content {
        padding: 0;
        width: 80%;
        height: 80%;
        max-width: -webkit-calc(100% - 100px);
        max-width: calc(100% - 100px);
        max-height: -webkit-calc(100% - 88px);
        max-height: calc(100% - 88px);
        overflow: visible;
        background: #fff
    }

    .fancybox-iframe {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        width: 100%;
        height: 100%;
        background: #fff
    }

    .fancybox-error {
        margin: 0;
        padding: 40px;
        width: 100%;
        max-width: 380px;
        background: #fff;
        cursor: default
    }

    .fancybox-error p {
        margin: 0;
        padding: 0;
        color: #444;
        font-size: 16px;
        line-height: 20px
    }

    .fancybox-button {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: inline-block;
        vertical-align: top;
        width: 44px;
        height: 44px;
        margin: 0;
        padding: 10px;
        border: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        background: rgba(30,30,30,.6);
        -webkit-transition: color .3s ease;
        -o-transition: color .3s ease;
        transition: color .3s ease;
        cursor: pointer;
        outline: 0
    }

    .fancybox-button,.fancybox-button:visited,.fancybox-button:link {
        color: #ccc
    }

    .fancybox-button:focus,.fancybox-button:hover {
        color: #fff
    }

    .fancybox-button[disabled] {
        color: #ccc;
        cursor: default;
        opacity: .6
    }

    .fancybox-button svg {
        display: block;
        position: relative;
        overflow: visible;
        shape-rendering: geometricPrecision
    }

    .fancybox-button svg path {
        fill: currentColor;
        stroke: currentColor;
        stroke-linejoin: round;
        stroke-width: 3
    }

    .fancybox-button--share svg path {
        stroke-width: 1
    }

    .fancybox-button--play svg path:nth-child(2) {
        display: none
    }

    .fancybox-button--pause svg path:nth-child(1) {
        display: none
    }

    .fancybox-button--zoom svg path {
        fill: transparent
    }

    .fancybox-navigation {
        display: none
    }

    .fancybox-show-nav .fancybox-navigation {
        display: block
    }

    .fancybox-navigation button {
        position: absolute;
        top: 50%;
        margin: -50px 0 0;
        z-index: 99997;
        background: 0 0;
        width: 60px;
        height: 100px;
        padding: 17px
    }

    .fancybox-navigation button:before {
        content: "";
        position: absolute;
        top: 30px;
        right: 10px;
        width: 40px;
        height: 40px;
        background: rgba(30,30,30,.6)
    }

    .fancybox-navigation .fancybox-button--arrow_left {
        left: 0
    }

    .fancybox-navigation .fancybox-button--arrow_right {
        right: 0
    }

    .fancybox-close-small {
        position: absolute;
        top: 0;
        right: 0;
        width: 44px;
        height: 44px;
        padding: 0;
        margin: 0;
        border: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        background: 0 0;
        z-index: 10;
        cursor: pointer
    }

    .fancybox-close-small:after {
        content: '×';
        position: absolute;
        top: 5px;
        right: 5px;
        width: 30px;
        height: 30px;
        font: 20px/30px Arial,"Helvetica Neue",Helvetica,sans-serif;
        color: #888;
        font-weight: 300;
        text-align: center;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        border-width: 0;
        background-color: transparent;
        -webkit-transition: background-color .25s;
        -o-transition: background-color .25s;
        transition: background-color .25s;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 2
    }

    .fancybox-close-small:focus {
        outline: 0
    }

    .fancybox-close-small:focus:after {
        outline: 1px dotted #888
    }

    .fancybox-close-small:hover:after {
        color: #555;
        background: #eee
    }

    .fancybox-slide--image .fancybox-close-small,.fancybox-slide--iframe .fancybox-close-small {
        top: 0;
        right: -44px
    }

    .fancybox-slide--image .fancybox-close-small:after,.fancybox-slide--iframe .fancybox-close-small:after {
        font-size: 35px;
        color: #aaa
    }

    .fancybox-slide--image .fancybox-close-small:hover:after,.fancybox-slide--iframe .fancybox-close-small:hover:after {
        color: #fff;
        background: 0 0
    }

    .fancybox-is-scaling .fancybox-close-small,.fancybox-is-zoomable.fancybox-can-drag .fancybox-close-small {
        display: none
    }

    .fancybox-caption-wrap {
        bottom: 0;
        left: 0;
        right: 0;
        padding: 60px 2vw 0;
        background: -webkit-gradient(linear,left top,left bottom,from(transparent),color-stop(20%,rgba(0,0,0,.1)),color-stop(40%,rgba(0,0,0,.2)),color-stop(80%,rgba(0,0,0,.6)),to(rgba(0,0,0,.8)));
        background: -webkit-linear-gradient(top,transparent 0,rgba(0,0,0,.1) 20%,rgba(0,0,0,.2) 40%,rgba(0,0,0,.6) 80%,rgba(0,0,0,.8) 100%);
        background: -o-linear-gradient(top,transparent 0,rgba(0,0,0,.1) 20%,rgba(0,0,0,.2) 40%,rgba(0,0,0,.6) 80%,rgba(0,0,0,.8) 100%);
        background: linear-gradient(to bottom,transparent 0,rgba(0,0,0,.1) 20%,rgba(0,0,0,.2) 40%,rgba(0,0,0,.6) 80%,rgba(0,0,0,.8) 100%);
        pointer-events: none
    }

    .fancybox-caption {
        padding: 30px 0;
        border-top: 1px solid rgba(255,255,255,.4);
        font-size: 14px;
        color: #fff;
        line-height: 20px;
        -webkit-text-size-adjust: none
    }

    .fancybox-caption a,.fancybox-caption button,.fancybox-caption select {
        pointer-events: all;
        position: relative
    }

    .fancybox-caption a {
        color: #fff;
        text-decoration: underline
    }

    .fancybox-slide>.fancybox-loading {
        border: 6px solid rgba(100,100,100,.4);
        border-top: 6px solid rgba(255,255,255,.6);
        -webkit-border-radius: 100%;
        border-radius: 100%;
        height: 50px;
        width: 50px;
        -webkit-animation: fancybox-rotate .8s infinite linear;
        animation: fancybox-rotate .8s infinite linear;
        background: 0 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -30px;
        margin-left: -30px;
        z-index: 99999
    }

    @-webkit-keyframes fancybox-rotate {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes fancybox-rotate {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .fancybox-animated {
        -webkit-transition-timing-function: cubic-bezier(0,0,.25,1);
        -o-transition-timing-function: cubic-bezier(0,0,.25,1);
        transition-timing-function: cubic-bezier(0,0,.25,1)
    }

    .fancybox-fx-slide.fancybox-slide--previous {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        opacity: 0
    }

    .fancybox-fx-slide.fancybox-slide--next {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        opacity: 0
    }

    .fancybox-fx-slide.fancybox-slide--current {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }

    .fancybox-fx-fade.fancybox-slide--previous,.fancybox-fx-fade.fancybox-slide--next {
        opacity: 0;
        -webkit-transition-timing-function: cubic-bezier(.19,1,.22,1);
        -o-transition-timing-function: cubic-bezier(.19,1,.22,1);
        transition-timing-function: cubic-bezier(.19,1,.22,1)
    }

    .fancybox-fx-fade.fancybox-slide--current {
        opacity: 1
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--previous {
        -webkit-transform: scale3d(1.5,1.5,1.5);
        transform: scale3d(1.5,1.5,1.5);
        opacity: 0
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--next {
        -webkit-transform: scale3d(.5,.5,.5);
        transform: scale3d(.5,.5,.5);
        opacity: 0
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--current {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1);
        opacity: 1
    }

    .fancybox-fx-rotate.fancybox-slide--previous {
        -webkit-transform: rotate(-360deg);
        -ms-transform: rotate(-360deg);
        transform: rotate(-360deg);
        opacity: 0
    }

    .fancybox-fx-rotate.fancybox-slide--next {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
        opacity: 0
    }

    .fancybox-fx-rotate.fancybox-slide--current {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
        opacity: 1
    }

    .fancybox-fx-circular.fancybox-slide--previous {
        -webkit-transform: scale3d(0,0,0) translate3d(-100%,0,0);
        transform: scale3d(0,0,0) translate3d(-100%,0,0);
        opacity: 0
    }

    .fancybox-fx-circular.fancybox-slide--next {
        -webkit-transform: scale3d(0,0,0) translate3d(100%,0,0);
        transform: scale3d(0,0,0) translate3d(100%,0,0);
        opacity: 0
    }

    .fancybox-fx-circular.fancybox-slide--current {
        -webkit-transform: scale3d(1,1,1) translate3d(0,0,0);
        transform: scale3d(1,1,1) translate3d(0,0,0);
        opacity: 1
    }

    .fancybox-fx-tube.fancybox-slide--previous {
        -webkit-transform: translate3d(-100%,0,0) scale(.1) skew(-10deg);
        transform: translate3d(-100%,0,0) scale(.1) skew(-10deg)
    }

    .fancybox-fx-tube.fancybox-slide--next {
        -webkit-transform: translate3d(100%,0,0) scale(.1) skew(10deg);
        transform: translate3d(100%,0,0) scale(.1) skew(10deg)
    }

    .fancybox-fx-tube.fancybox-slide--current {
        -webkit-transform: translate3d(0,0,0) scale(1);
        transform: translate3d(0,0,0) scale(1)
    }

    .fancybox-share {
        padding: 30px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        background: #f4f4f4;
        max-width: 90%
    }

    .fancybox-share h1 {
        color: #222;
        margin: 0 0 20px;
        font-size: 33px;
        font-weight: 700;
        text-align: center
    }

    .fancybox-share p {
        margin: 0;
        padding: 0;
        text-align: center
    }

    .fancybox-share p:first-of-type {
        margin-right: -10px
    }

    .fancybox-share_button {
        display: inline-block;
        text-decoration: none;
        margin: 0 10px 10px 0;
        padding: 10px 20px;
        border: 0;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.16);
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.16);
        background: #fff;
        white-space: nowrap;
        font-size: 16px;
        line-height: 23px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        min-width: 140px;
        color: #707070;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s
    }

    .fancybox-share_button:focus,.fancybox-share_button:hover {
        text-decoration: none;
        color: #333;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.3);
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.3)
    }

    .fancybox-share_button svg {
        margin-right: 5px;
        width: 20px;
        height: 20px;
        vertical-align: text-bottom
    }

    .fancybox-share input {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        margin: 5px 0 0;
        padding: 10px 15px;
        border: 1px solid #d7d7d7;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        background: #ebebeb;
        color: #5d5b5b;
        font-size: 14px;
        outline: 0
    }

    .fancybox-thumbs {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        width: 212px;
        margin: 0;
        padding: 2px 2px 4px;
        background: #fff;
        -webkit-tap-highlight-color: transparent;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 99995
    }

    .fancybox-thumbs-x {
        overflow-y: hidden;
        overflow-x: auto
    }

    .fancybox-show-thumbs .fancybox-thumbs {
        display: block
    }

    .fancybox-show-thumbs .fancybox-inner {
        right: 212px
    }

    .fancybox-thumbs>ul {
        list-style: none;
        position: absolute;
        position: relative;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        overflow-y: auto;
        font-size: 0;
        white-space: nowrap
    }

    .fancybox-thumbs-x>ul {
        overflow: hidden
    }

    .fancybox-thumbs-y>ul::-webkit-scrollbar {
        width: 7px
    }

    .fancybox-thumbs-y>ul::-webkit-scrollbar-track {
        background: #fff;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        box-shadow: inset 0 0 6px rgba(0,0,0,.3)
    }

    .fancybox-thumbs-y>ul::-webkit-scrollbar-thumb {
        background: #2a2a2a;
        -webkit-border-radius: 10px;
        border-radius: 10px
    }

    .fancybox-thumbs>ul>li {
        float: left;
        overflow: hidden;
        padding: 0;
        margin: 2px;
        width: 100px;
        height: 75px;
        max-width: -webkit-calc(50% - 4px);
        max-width: calc(50% - 4px);
        max-height: -webkit-calc(100% - 8px);
        max-height: calc(100% - 8px);
        position: relative;
        cursor: pointer;
        outline: 0;
        -webkit-tap-highlight-color: transparent;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    li.fancybox-thumbs-loading {
        background: rgba(0,0,0,.1)
    }

    .fancybox-thumbs>ul>li>img {
        position: absolute;
        top: 0;
        left: 0;
        max-width: none;
        max-height: none;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .fancybox-thumbs>ul>li:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border: 4px solid #4ea7f9;
        z-index: 99991;
        opacity: 0;
        -webkit-transition: all .2s cubic-bezier(.25,.46,.45,.94);
        -o-transition: all .2s cubic-bezier(.25,.46,.45,.94);
        transition: all .2s cubic-bezier(.25,.46,.45,.94)
    }

    .fancybox-thumbs>ul>li.fancybox-thumbs-active:before {
        opacity: 1
    }

    @media all and (max-width: 800px) {
        .fancybox-thumbs {
            width:110px
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 110px
        }

        .fancybox-thumbs>ul>li {
            max-width: -webkit-calc(100% - 10px);

            max-width: calc(100% - 10px)
        }
    }

    .stars-rating,.header-navigation ul,.banner-content .review-text .stars,.booking-form .gform_body ul,.detail-info-holder .detail-info ul,.faq-menu-block .block-column-menu ul,.lists-wrapper ul,.list-block-service ul,.list-block ul,.quote-form-section .row-personal-info,.quote-form-section .row-business-info,.contact-form ul,.gform_body ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .clearfix:after,.container:after,.banner-service:after,.booking-form .gform_fields:after,.working-steps:after,.list-block-service ul:after,.live-rating-counter:after,.social-nav ul:after {
        content: '';
        display: block;
        clear: both
    }

    .ellipsis {
        white-space: nowrap;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden
    }

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    *,*:before,*:after {
        -webkit-box-sizing: inherit;
        box-sizing: inherit
    }

    * {
        max-height: 1000000px
    }

    body {
        color: #303030;
        background: #fff;
        font: 16px/30px "Avenir",sans-serif;
        min-width: 320px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    body p {
        color: #5c5c5c
    }

    img {
        max-width: 100%;
        height: auto
    }

    .gm-style img {
        max-width: none
    }

    h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,.h {
        font-family: inherit;
        font-weight: 700;
        margin: 0 0 .5em;
        color: inherit
    }

    h1,.h1 {
        font-size: 30px
    }

    h2,.h2 {
        font-size: 27px
    }

    h3,.h3 {
        font-size: 24px
    }

    h4,.h4 {
        font-size: 21px
    }

    h5,.h5 {
        font-size: 17px
    }

    h6,.h6 {
        font-size: 15px
    }

    p {
        margin: 0 0 1em
    }

    a {
        color: #377dff
    }

    a:hover,a:focus {
        text-decoration: none
    }

    form,fieldset {
        margin: 0;
        padding: 0;
        border-style: none
    }

    input[type=text],input[type=tel],input[type=email],input[type=search],input[type=password],textarea {
        -webkit-appearance: none;
        -webkit-border-radius: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #999;
        padding: .4em .7em
    }

    input[type=text]:focus,input[type=tel]:focus,input[type=email]:focus,input[type=search]:focus,input[type=password]:focus,textarea:focus {
        border-color: #303030
    }

    input[type=text]::-webkit-input-placeholder,input[type=tel]::-webkit-input-placeholder,input[type=email]::-webkit-input-placeholder,input[type=search]::-webkit-input-placeholder,input[type=password]::-webkit-input-placeholder,textarea::-webkit-input-placeholder {
        color: #999
    }

    input[type=text]::-moz-placeholder,input[type=tel]::-moz-placeholder,input[type=email]::-moz-placeholder,input[type=search]::-moz-placeholder,input[type=password]::-moz-placeholder,textarea::-moz-placeholder {
        opacity: 1;
        color: #999
    }

    input[type=text]:-moz-placeholder,input[type=tel]:-moz-placeholder,input[type=email]:-moz-placeholder,input[type=search]:-moz-placeholder,input[type=password]:-moz-placeholder,textarea:-moz-placeholder {
        color: #999
    }

    input[type=text]:-ms-input-placeholder,input[type=tel]:-ms-input-placeholder,input[type=email]:-ms-input-placeholder,input[type=search]:-ms-input-placeholder,input[type=password]:-ms-input-placeholder,textarea:-ms-input-placeholder {
        color: #999
    }

    input[type=text].placeholder,input[type=tel].placeholder,input[type=email].placeholder,input[type=search].placeholder,input[type=password].placeholder,textarea.placeholder {
        color: #999
    }

    select {
        -webkit-border-radius: 0
    }

    textarea {
        resize: vertical;
        vertical-align: top
    }

    button,input[type=button],input[type=reset],input[type=file],input[type=submit] {
        -webkit-appearance: none;
        -webkit-border-radius: 0;
        cursor: pointer
    }

    body.nav-active {
        overflow: hidden
    }

    body.home {
        padding: 0
    }

    h1,h2,h3,h4,h5,h6,p {
        margin: 0
    }

    a {
        outline: 0
    }

    img {
        max-width: 100%;
        height: auto;
        vertical-align: top
    }

    #wrapper {
        margin: 0;
        position: relative;
        overflow: hidden
    }

    .container {
        padding: 0 15px;
        max-width: 1170px
    }

    @media(min-width: 1024px) {
        .container {
            margin:0 auto
        }
    }

    @media(min-width: 1200px) {
        .container {
            padding-left:0;
            padding-right: 0
        }
    }

    .container.large {
        width: 100%
    }

    .main {
        overflow: hidden;
        position: relative
    }

    .holder {
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #303030;
        z-index: 2
    }

    .overlay.white {
        background: #fff
    }

    .logo a {
        display: block;
        height: auto
    }

    .logo a img {
        width: 100%;
        height: auto;
        vertical-align: top
    }

    .transparent_btn {
        background: 0 0;
        color: #fff;
        border: 1px solid #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        text-decoration: none;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 15px;
        max-width: 100px;
        height: 40px;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .transparent_btn:hover {
        background-color: rgba(255,255,255,.1);
        color: #fff
    }

    .stars-rating {
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px
    }

    .stars-rating li {
        display: inline-block;
        vertical-align: top;
        margin: 0 2px;
        position: relative;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/rating-star.svg);
        background-repeat: no-repeat;
        width: 13px;
        height: 12px
    }

    .stars-rating li:first-child {
        margin-left: 0
    }

    .stars-rating li:last-child {
        margin-right: 0
    }

    .stars-rating li .star-holder {
        display: block;
        position: relative;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/star-rated.svg);
        background-repeat: no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .stars-rating li.star-half .star-holder {
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/star-half.svg);
        background-repeat: no-repeat
    }

    .stars-rating li.star-none .star-holder {
        background: 0 0
    }

    .refer .button-primary {
        width: 100%;
        max-width: 370px;
        height: 55px;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        text-transform: uppercase;
        line-height: 59px;
        padding: 0
    }

    .refer .banner-text .heading-block .sub-para {
        max-width: 100%
    }

    .button-primary {
        display: inline-block;
        vertical-align: top;
        padding: 12px 36px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 700;
        line-height: 1.3;
        color: #fff;
        text-decoration: none;
        background: #f6921e;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        border-bottom: 4px solid #d87809
    }

    .button-primary:hover {
        background: #f1860a;
        border-bottom-color: #c06b08
    }

    .button-primary.loading {
        cursor: none;
        pointer-events: none;
        background: #d9d9d9;
        border-bottom-color: #bfbfbf
    }

    .button-primary.button-blue {
        background: #377dff;
        border-bottom: 4px solid #045cff
    }

    .button-primary.button-blue:hover {
        border-bottom-color: #0052ea;
        background: #1e6cff
    }

    .blue-btn .button-primary {
        background: #377dff;
        padding-left: 54px;
        padding-right: 54px;
        color: #fff;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        font-weight: 700
    }

    .blue-btn .button-primary:hover {
        background: #045cff
    }

    .heading-block {
        text-align: center;
        padding-bottom: 30px;
        color: #5c5c5c;
        margin: 0 auto
    }

    .heading-block .heading-text {
        font-size: 36px;
        font-weight: 400;
        color: #303030
    }

    .heading-block .heading-text a {
        color: inherit;
        text-decoration: none;
        font-size: inherit
    }

    @media(min-width: 1024px) {
        .heading-block .heading-text {
            font-size:34px;
            line-height: 41px
        }
    }

    .heading-block .sub-para {
        max-width: 820px;
        margin: 0 auto;
        line-height: 1.5;
        font-size: 16px;
        padding-bottom: 18px;
        margin-top: 51px
    }

    @media(min-width: 768px) {
        .heading-block .sub-para {
            font-size:16px
        }
    }

    @media(min-width: 1024px) {
        .heading-block .sub-para {
            font-size:16px;
            padding-bottom: 32px
        }
    }

    .heading-block .sub-para p {
        margin-bottom: 10px
    }

    .heading-block .sub-para p:last-child {
        margin-bottom: 0
    }

    .heading-block+.button-wrapper {
        padding-top: 25px
    }

    .arrow-link {
        display: block;
        text-decoration: none;
        color: #fff;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .arrow-link span {
        display: inline-block;
        vertical-align: middle;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .arrow-link span.icon {
        position: relative;
        -webkit-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg);
        padding-left: 16px;
        opacity: .6;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .arrow-link:hover {
        opacity: .6
    }

    .arrow-link:hover .icon {
        opacity: 1
    }

    .blog-content-part {
        overflow: hidden;
        padding: 50px 0 90px
    }

    .blog-content-part .container {
        max-width: 800px;
        margin: 0 auto;
        font-weight: 400
    }

    @media(min-width: 1024px) {
        .blog-content-part .container {
            font-size:18px;
            line-height: 1.67
        }
    }

    .blog-content-part .container h1,.blog-content-part .container h2,.blog-content-part .container h3,.blog-content-part .container h4,.blog-content-part .container h5,.blog-content-part .container h6 {
        display: block;
        margin-bottom: 20px
    }

    .blog-content-part .container h1:empty,.blog-content-part .container h2:empty,.blog-content-part .container h3:empty,.blog-content-part .container h4:empty,.blog-content-part .container h5:empty,.blog-content-part .container h6:empty {
        display: none
    }

    .blog-content-part .container p {
        margin-bottom: 15px
    }

    .blog-content-part .container p:empty {
        display: none
    }

    .blog-content-part .container img {
        width: 100%;
        height: auto
    }

    .iframe-code {
        padding: 60px 0;
        min-height: 640px
    }

    .policy-block {
        padding: 81px 0;
        color: #5c5c5c;
        line-height: 1.6
    }

    .policy-block .heading-block {
        padding: 0
    }

    .policy-block .heading-text {
        font-weight: 700
    }

    @media(min-width: 1024px) {
        .policy-block .heading-text {
            font-size:68px;
            margin-bottom: 105px
        }
    }

    .policy-block p {
        margin-bottom: 15px
    }

    .policy-block p::last-child {
        margin-bottom: 0
    }

    .policy-block h1,.policy-block h2,.policy-block h3,.policy-block h4,.policy-block h5,.policy-block h6 {
        margin-bottom: 10px;
        font-weight: 700
    }

    .policy-block h1 {
        font-size: 26px
    }

    .policy-block h2 {
        font-size: 18px
    }

    .policy-block h3 {
        font-size: 16px
    }

    .button-primary.button_grey {
        color: #303030;
        background: #fff;
        border-color: #ededeb;
        text-transform: uppercase;
        font-size: 17px;
        max-width: 230px;
        width: 100%;
        padding: 16px 15px 11px
    }

    .button-primary.button_grey:hover {
        background: #d5d5d5
    }

    .button-primary.button_white {
        color: #303030;
        background: #fff;
        border-color: #ededeb;
        font-size: 16px;
        max-width: 150px;
        width: 100%;
        padding: 10px;
        border: 1px solid #303030
    }

    .button-primary.button_white:hover {
        background: #377dff;
        color: #fff;
        border-color: #377dff
    }

    html {
        height: 100%
    }

    body.error404 {
        background: #ededeb;
        height: 100%
    }

    body.error404 #wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100%;
        overflow: unset
    }

    body.error404 #wrapper #main {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100%;
        overflow: unset;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .section_404 {
        isplay: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        color: #363636;
        text-align: center
    }

    .section_404 .image {
        padding-bottom: 20px
    }

    .section_404 .image img {
        max-width: 100%;
        display: block;
        margin: auto
    }

    .section_404 .title {
        padding-bottom: 20px;
        margin: 0
    }

    .section_404 .title h1 {
        font-size: 116px;
        line-height: 116px
    }

    .section_404 .sub_title h2 {
        font-size: 30px;
        margin: 0;
        font-weight: 400
    }

    .section_404 .text {
        padding-bottom: 20px
    }

    .section_404 .text p {
        font-size: 18px;
        color: #5c5c5c
    }

    @media all and (max-height: 890px) {
        body.error404 #wrapper {
            display:-webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: auto
        }
    }

    .office-cleaning .reason-block .working-steps {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .office-cleaning .reason-block .working-steps .step-wrap {
        width: auto;
        margin-bottom: 25px
    }

    .office-cleaning .reason-block .working-steps .step-icon {
        max-width: 100%;
        height: 90px
    }

    .office-cleaning .reason-block .working-steps .step-content {
        color: #303030
    }

    .office-cleaning .reason-block .working-steps .step-content .step-title {
        margin-bottom: 20px
    }

    .office-cleaning .reason-block .working-steps .step-content p {
        color: #5c5c5c
    }

    .office-cleaning .want_work_section .section {
        padding: 100px 0;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .office-cleaning .want_work_section .section .content {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1
    }

    .office-cleaning .want_work_section .section .content h2 {
        font-size: 46px;
        font-weight: 400
    }

    .office-cleaning .want_work_section .section .content .sub_title p {
        font-size: 20px
    }

    .office-cleaning .want_work_section .section .image {
        min-width: 200px
    }

    .office-cleaning .want_work_section .section .image img {
        max-width: 100%
    }

    .slick-track {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        height: 100%
    }

    .slick-track .review {
        height: 100%;
        position: relative;
        padding-bottom: 100px
    }

    .slick-track .review .review-info {
        border-bottom: 0
    }

    .slick-track .review .review-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        padding: 30px
    }

    .slick-track .review .review-footer:after {
        content: "";
        width: 80%;
        height: 1px;
        background: #d0d0d0;
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: auto
    }

    .satisfaction-block.page_connector_2 {
        padding: 171px 0
    }

    .satisfaction-block.page_connector_2 .heading-block h2 {
        font-weight: 600;
        color: #fff
    }

    .satisfaction-block.page_connector_2 .heading-block p {
        font-size: 30px;
        color: #fff;
        padding-bottom: 20px
    }

    .satisfaction-block.page_connector_3 {
        padding: 171px 0
    }

    .satisfaction-block.page_connector_3 .heading-block .heading-text {
        margin-bottom: 30px
    }

    .satisfaction-block.page_connector_3 .heading-block h2 {
        font-weight: 400;
        color: #303030
    }

    .satisfaction-block.page_connector_3 .heading-block p {
        font-size: 20px;
        color: #5c5c5c;
        padding-bottom: 0
    }

    .want_work_section.right .section {
        padding: 0;
        padding-top: 60px
    }

    .want_work_section.right .section .content {
        width: 65%;
        -webkit-box-ordinal-group: 1;
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0
    }

    .want_work_section.right .section .content .title {
        padding-bottom: 10px
    }

    .want_work_section.right .section .content .title h2 {
        font-size: 30px
    }

    .want_work_section.right .section .content .text ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .want_work_section.right .section .content .text ul li {
        width: 50%;
        display: block;
        position: relative;
        padding-left: 38px;
        padding-bottom: 25px;
        font-size: 16px
    }

    .want_work_section.right .section .content .text ul li:before {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 15px;
        height: 11px;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/check_marck.png);
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        z-index: 1
    }

    .want_work_section.right .section .content .button-primary {
        width: 100%;
        max-width: 230px;
        font-size: 20px;
        text-align: center;
        font-weight: 600
    }

    .want_work_section.right .section .image {
        width: 35%
    }

    .list_services_customize {
        padding-top: 20px
    }

    .list_services_customize ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
        margin-left: 0;
        padding-left: 0
    }

    .list_services_customize ul li {
        list-style: none;
        padding: 0 10px 25px;
        text-align: center
    }

    .list_services_customize ul li .icon {
        padding-bottom: 25px;
        height: 80px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .list_services_customize ul li .text {
        font-size: 20px;
        line-height: 25px;
        font-weight: 600
    }

    .landing__chat {
        overflow: hidden;
        max-width: 540px;
        height: 300px;
        overflow: hidden;
        padding-left: 60px;
        padding-right: 60px;
        position: relative;
        margin: auto
    }

    .landing__message {
        -webkit-transform: scale(.5);
        -ms-transform: scale(.5);
        transform: scale(.5);
        opacity: 0
    }

    .landing__chat-block {
        height: 300px
    }

    .landing__chat_show .landing__message {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }

    .landing__chat_show .landing__chat-block .landing__message:nth-child(1) {
        -webkit-transition: opacity .3s,-webkit-transform .3s;
        transition: opacity .3s,-webkit-transform .3s;
        -o-transition: opacity .3s,transform .3s;
        transition: opacity .3s,transform .3s;
        transition: opacity .3s,transform .3s,-webkit-transform .3s;
        margin-bottom: 20px
    }

    .landing__chat_show .landing__chat-block .landing__message:nth-child(2) {
        -webkit-transition: opacity .3s 1s,-webkit-transform .3s 1s;
        transition: opacity .3s 1s,-webkit-transform .3s 1s;
        -o-transition: opacity .3s 1s,transform .3s 1s;
        transition: opacity .3s 1s,transform .3s 1s;
        transition: opacity .3s 1s,transform .3s 1s,-webkit-transform .3s 1s
    }

    .landing__chat_show .landing__chat-block {
        -webkit-transition: opacity .8s 10s,height .001s 10.8s,-webkit-transform .8s 10s;
        transition: opacity .8s 10s,height .001s 10.8s,-webkit-transform .8s 10s;
        -o-transition: transform .8s 10s,opacity .8s 10s,height .001s 10.8s;
        transition: transform .8s 10s,opacity .8s 10s,height .001s 10.8s;
        transition: transform .8s 10s,opacity .8s 10s,height .001s 10.8s,-webkit-transform .8s 10s;
        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%);
        opacity: 0;
        height: 0
    }

    .landing__chat_show .landing__message:nth-child(2) {
        -webkit-transition: opacity .3s 10.8s,-webkit-transform .3s 10.8s;
        transition: opacity .3s 10.8s,-webkit-transform .3s 10.8s;
        -o-transition: opacity .3s 10.8s,transform .3s 10.8s;
        transition: opacity .3s 10.8s,transform .3s 10.8s;
        transition: opacity .3s 10.8s,transform .3s 10.8s,-webkit-transform .3s 10.8s;
        margin-bottom: 20px
    }

    .landing__chat_show .landing__message:nth-child(3) {
        -webkit-transition: opacity .3s 12.3s,-webkit-transform .3s 12.3s;
        transition: opacity .3s 12.3s,-webkit-transform .3s 12.3s;
        -o-transition: opacity .3s 12.3s,transform .3s 12.3s;
        transition: opacity .3s 12.3s,transform .3s 12.3s;
        transition: opacity .3s 12.3s,transform .3s 12.3s,-webkit-transform .3s 12.3s
    }

    .chat_list_wrap {
        margin: 50px auto 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .chat_list_wrap p {
        max-width: 420px;
        word-wrap: break-word;
        margin-bottom: 20px;
        line-height: 30px;
        position: relative;
        padding: 25px 35px;
        -webkit-border-radius: 25px;
        border-radius: 25px;
        font-size: 17px;
        display: inline-block
    }

    .chat_list_wrap p:before,.chat_list_wrap p:after {
        content: "";
        position: absolute;
        bottom: 4px;
        height: 20px
    }

    .chat_list_wrap p:last-child {
        margin-bottom: 0
    }

    .chat_list_wrap p .avatar {
        position: absolute;
        width: 44px;
        height: 44px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        overflow: hidden;
        bottom: 0;
        z-index: 1
    }

    .chat_list_wrap p:nth-child(even) {
        padding: 25px
    }

    .chat_list_wrap .from-me {
        color: #fff;
        background: #377dff;
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end
    }

    .chat_list_wrap .from-me:before {
        right: -7px;
        border-right: 20px solid #377dff;
        -webkit-border-bottom-left-radius: 16px 14px;
        border-bottom-left-radius: 16px 14px;
        -webkit-transform: translate(0,-2px);
        -ms-transform: translate(0,-2px);
        transform: translate(0,-2px)
    }

    .chat_list_wrap .from-me:after {
        right: -56px;
        width: 26px;
        background: #fff;
        -webkit-border-bottom-left-radius: 10px;
        border-bottom-left-radius: 10px;
        -webkit-transform: translate(-30px,-2px);
        -ms-transform: translate(-30px,-2px);
        transform: translate(-30px,-2px)
    }

    .chat_list_wrap .from-me .avatar {
        right: -55px
    }

    .chat_list_wrap .from-them {
        background: #ededeb;
        color: #000;
        -webkit-align-self: baseline;
        -ms-flex-item-align: baseline;
        align-self: baseline
    }

    .chat_list_wrap .from-them:before {
        left: -7px;
        border-left: 20px solid #ededeb;
        -webkit-border-bottom-right-radius: 16px 14px;
        border-bottom-right-radius: 16px 14px;
        -webkit-transform: translate(0,-2px);
        -ms-transform: translate(0,-2px);
        transform: translate(0,-2px)
    }

    .chat_list_wrap .from-them:after {
        left: 4px;
        width: 26px;
        background: #fff;
        -webkit-border-bottom-right-radius: 10px;
        border-bottom-right-radius: 10px;
        -webkit-transform: translate(-30px,-2px);
        -ms-transform: translate(-30px,-2px);
        transform: translate(-30px,-2px)
    }

    .chat_list_wrap .from-them .avatar {
        left: -55px
    }

    .booking-form-block .container {
        max-width: 1170px
    }

    .seo_block_w {
        display: block;
        width: 100%;
        padding: 50px 0 0
    }

    .seo_content {
        padding-top: 55px;
        padding-bottom: 75px
    }

    .seo_content .title {
        margin-bottom: 15px
    }

    .seo_content .title h2 {
        font-size: 34px;
        line-height: 41px;
        font-weight: 400;
        color: #303030
    }

    .seo_content .text {
        padding-top: 42px;
        line-height: 30px;
        letter-spacing: 0;
        color: #5c5c5c;
        font-size: 16px;
        padding-bottom: 57px
    }

    .seo_content h2 {
        font-size: 34px;
        line-height: 41px;
        font-weight: 400;
        color: #303030
    }

    .link_btn {
        display: block;
        margin: auto;
        padding: 25px 0
    }

    .link_btn a {
        color: #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        padding: 13px 25px;
        background: #ff8d00;
        font-size: 18px;
        font-weight: 700;
        outline: 0!important;
        border-bottom: 4px solid #e77c00;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        text-decoration: none;
        text-transform: none;
        padding-top: 16px;
        margin: auto;
        display: inline-block;
        min-width: 269px;
        text-align: center
    }

    .link_btn a:hover {
        background: #f1860a
    }

    .seo_block_left,.seo_block_right {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .seo_block_left .image_seo {
        width: 50%;
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end;
        text-align: center
    }

    .seo_block_left .seo_content {
        width: 50%;
        padding-left: 16px
    }

    .seo_block_right .image_seo {
        width: 50%;
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end;
        text-align: center
    }

    .seo_block_right .seo_content {
        width: 50%;
        padding-right: 16px
    }

    .seo_block_center {
        display: block;
        width: 100%;
        text-align: center
    }

    .seo_block_center .image_seo {
        padding: 25px 0
    }

    .want_work_section .section {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 60px
    }

    .want_work_section .section .content {
        width: 50%
    }

    .want_work_section .section .content .title {
        padding-bottom: 20px
    }

    .want_work_section .section .content .title h2 {
        font-size: 34px;
        font-weight: 400
    }

    .want_work_section .section .content .sub_title {
        padding-bottom: 20px
    }

    .want_work_section .section .content .sub_title p {
        color: #5c5c5c;
        line-height: 30px;
        font-size: 16px
    }

    .want_work_section .section .content .link_btn {
        padding: 17px 0
    }

    .home_map .link_btn {
        text-align: center;
        margin-top: 58px
    }

    .map_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .map_block .item {
        width: 49%;
        min-height: 400px;
        max-height: 400px;
        position: relative
    }

    .map_block .item.image img {
        -o-object-fit: cover;
        object-fit: cover;
        max-width: 100%;
        width: 100%;
        height: 100%
    }

    .map_block .item.image:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,.3)
    }

    .map_block .item.map .map_frame {
        height: 100%
    }

    .map_block .item.map .map_frame iframe {
        width: 100%;
        height: 100%
    }

    .popular_services {
        border: 1px solid #ededeb;
        padding: 38px 52px 4px 54px;
        margin: 50px 0
    }

    .popular_services h3 {
        font-size: 13px;
        line-height: 16px;
        letter-spacing: .15em;
        color: #303030;
        text-transform: uppercase;
        padding-bottom: 18px
    }

    .popular_services p {
        font-size: 13px;
        line-height: 20px;
        color: #5c5c5c
    }

    .popular_services .fuel_width {
        display: block;
        width: 100%;
        padding: 0 15px;
        padding-bottom: 26px
    }

    .popular_services .half_width_wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .popular_services .half_width_wrap .half_width {
        width: 50%;
        padding: 0 15px;
        padding-bottom: 26px
    }

    .text_block_wrap {
        border: 1px solid #ededeb;
        padding: 50px 70px
    }

    @media(max-width: 768px) {
        .text_block_wrap {
            padding:30px
        }
    }

    .text_block_wrap .lwptoc {
        margin: 0
    }

    .text_block_wrap .lwptoc-autoWidth .lwptoc_i {
        display: block
    }

    .text_block_wrap .text_block {
        padding-bottom: 40px
    }

    .text_block_wrap .text_block:last-child {
        padding-bottom: 0
    }

    .text_block_wrap .text_block h3 {
        font-size: 18px;
        line-height: 30px;
        color: #303030;
        padding-bottom: 41px
    }

    .text_block_wrap .text_block p {
        font-size: 16px;
        line-height: 30px;
        color: #5c5c5c
    }

    .text_block_wrap h2 {
        font-size: 34px;
        line-height: 41px;
        font-weight: 400
    }

    .method_wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .method_wrap .item {
        width: 33.3333%;
        padding: 0 15px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .method_wrap .item p {
        font-size: 16px;
        line-height: 30px;
        color: #5c5c5c
    }

    header {
        padding-top: 0
    }

    header .phone_top {
        text-align: center;
        padding: 0 30px;
        background: #377dff;
        height: 40px;
        line-height: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    header .phone_top a {
        text-decoration: none;
        font-size: 15px;
        color: #fff
    }

    header .container {
        margin-top: 28px
    }

    header .header_info {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .header-content {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .header-content .menus_wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .header-content .header-navigation.menu_city {
        margin-left: 25px
    }

    .text_section .text_wrap {
        padding-top: 75px
    }

    .text_section .text_wrap:first-child {
        padding-top: 0
    }

    .text_section .text_wrap .heading-block {
        padding-bottom: 0
    }

    .text_section .link_btn {
        text-align: center;
        margin-top: 20px;
        padding-bottom: 0
    }

    .text_section ul {
        padding-left: 25px
    }

    .text_section ul li {
        font-size: 13px;
        line-height: 20px;
        padding-bottom: 25px;
        color: #5c5c5c;
        position: relative;
        list-style: none;
        padding-left: 25px
    }

    .text_section ul li:before {
        content: '';
        position: absolute;
        top: 5px;
        left: 0;
        width: 6px;
        height: 6px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        background: #c3c3c3;
        color: #c3c3c3;
        overflow: hidden;
        z-index: 1
    }

    .text_section h2 {
        font-size: 34px;
        line-height: 41px;
        font-weight: 400
    }

    .all_services .heading-block {
        padding-bottom: 21px
    }

    .all_services .link_btn {
        text-align: center
    }

    .all_services_wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .all_services_wrap .item {
        width: 32%;
        text-align: center;
        max-width: 375px;
        margin-bottom: 119px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .all_services_wrap .item .image {
        position: relative;
        margin-bottom: 26px;
        overflow: hidden
    }

    .all_services_wrap .item .image img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -webkit-transition: all 600ms;
        -o-transition: all 600ms;
        transition: all 600ms;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }

    .all_services_wrap .item .image .overlay {
        opacity: 0
    }

    .all_services_wrap .item .title {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 60px;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .all_services_wrap .item .title .title_image {
        padding-right: 5px
    }

    .all_services_wrap .item .title h3 a {
        text-decoration: none;
        font-size: 20px;
        line-height: 24px;
        color: #303030
    }

    .different_services_section {
        -webkit-transition: background 300ms;
        -o-transition: background 300ms;
        transition: background 300ms
    }

    .different_services_section .heading-block .sub-para {
        line-height: 30px
    }

    .different_services_section h3 {
        letter-spacing: .15em;
        font-size: 13px;
        line-height: 16px
    }

    .included_list {
        padding-top: 11px
    }

    .included_list .title {
        padding-bottom: 31px
    }

    .included_list ul {
        margin: 0;
        padding: 0
    }

    .included_list ul li {
        color: #5c5c5c;
        font-size: 16px;
        line-height: 30px;
        list-style: none;
        position: relative;
        padding-left: 40px;
        margin-bottom: 20px
    }

    .included_list ul li:before {
        content: "";
        background: #ccc;
        position: absolute;
        top: 10px;
        left: 0;
        width: 6px;
        height: 6px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: block
    }

    .different_tab_wrap {
        padding-top: 84px
    }

    .different_tab_wrap .tab_title ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin: 0;
        padding: 0
    }

    .different_tab_wrap .tab_title ul li {
        list-style: none;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        align-items: center
    }

    .different_tab_wrap .tab_title ul li a.title {
        font-size: 59px;
        line-height: 71px;
        color: #303030;
        opacity: .25;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        text-decoration: none;
        font-weight: 700;
        margin-bottom: 8px
    }

    .different_tab_wrap .tab_title ul li a.title:hover {
        color: #f6921e;
        opacity: 1
    }

    .different_tab_wrap .tab_title ul li a.btn {
        -webkit-border-radius: 4px;
        border-radius: 4px;
        width: 100px;
        height: 40px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 15px;
        color: #377dff;
        background: rgba(204,204,204,.5);
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        text-decoration: none;
        opacity: 0;
        visibility: hidden
    }

    .different_tab_wrap .tab_title ul li a.btn:hover {
        background: #ccc
    }

    .different_tab_wrap .tab_title ul li.active a.title {
        color: #f6921e;
        opacity: 1
    }

    .different_tab_wrap .tab_title ul li.active a.btn {
        opacity: 1;
        visibility: visible
    }

    .different_tab_wrap .tab_wrap {
        padding-top: 42px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_sub_title {
        text-align: center
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content {
        margin-top: 153px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        margin-bottom: 102px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item:nth-child(even) .item_text {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1;
        padding-left: 85px;
        padding-right: 0
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item:last-child {
        margin-bottom: 0
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text {
        width: 50%;
        padding-right: 40px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .title {
        padding-bottom: 26px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_check {
        margin: 0;
        padding: 0
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_check li {
        position: relative;
        font-size: 13px;
        line-height: 20px;
        color: #5c5c5c;
        list-style: none;
        padding-left: 50px;
        margin-bottom: 10px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_check li:before {
        content: '';
        position: absolute;
        top: 3px;
        left: 8px;
        width: 16px;
        height: 12px;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/Rectangle_Stroke.svg) no-repeat center center/cover;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        z-index: 1;
        -webkit-background-size: 100% 100%;
        background-size: 100%
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_del {
        margin: 0;
        padding: 0
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_del li {
        position: relative;
        font-size: 13px;
        line-height: 20px;
        color: #5c5c5c;
        list-style: none;
        padding-left: 50px;
        margin-bottom: 10px;
        text-decoration: line-through
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_del li:before {
        content: '';
        position: absolute;
        top: 1px;
        left: 7px;
        width: 17px;
        height: 17px;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/rectangle_stroke_del.svg) no-repeat center center/cover;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        z-index: 1;
        -webkit-background-size: 100% 100%;
        background-size: 100%
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services {
        padding-top: 40px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services .text {
        font-size: 13px;
        line-height: 20px;
        color: #5c5c5c
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services ul {
        margin: 0;
        padding: 0
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services ul li {
        color: #5c5c5c;
        font-size: 13px;
        line-height: 20px;
        list-style: none;
        position: relative;
        padding-left: 40px;
        margin-bottom: 10px
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services ul li:before {
        content: "";
        background: #ccc;
        position: absolute;
        top: 6px;
        left: 0;
        width: 6px;
        height: 6px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: block
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image {
        width: 50%
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image .image {
        width: 100%;
        position: relative
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image .image:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background: rgba(255,255,255,.3);
        z-index: 1
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image .image img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
        height: 100%;
        max-height: 584px;
        position: relative
    }

    .banner.page-banner.get_price {
        padding: 96px 20px 88px
    }

    .banner.page-banner.get_price .banner-content {
        width: 100%
    }

    .banner.page-banner.get_price .banner-content .heading-block {
        margin-bottom: 30px
    }

    .banner.page-banner.get_price .banner-content .heading-block .heading-text {
        font-size: 34px;
        line-height: 41px;
        font-weight: 400;
        margin-bottom: 10px
    }

    .banner.page-banner.get_price .banner-content .heading-block .sub-para {
        margin-top: 0
    }

    .banner.page-banner.get_price .banner-content .gform_body {
        overflow: visible
    }

    .banner.page-banner.get_price .banner-content .gform_body .column_3 input,.banner.page-banner.get_price .banner-content .gform_body .column_2 input {
        -webkit-box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        height: 55px
    }

    .banner.page-banner.get_price .banner-content .gform_body .column_3 select,.banner.page-banner.get_price .banner-content .gform_body .column_2 select {
        height: 55px
    }

    .banner.page-banner.get_price .banner-content .gform_footer .gform_button {
        text-transform: uppercase;
        height: 55px;
        line-height: 39px;
        font-size: 17px;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .banner.page-banner.get_price .banner-content .booking-form ul.inputfields {
        -webkit-box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        overflow: hidden
    }

    .banner.page-banner.get_price .banner-content .form-booking {
        padding-bottom: 9px;
        min-height: 204px
    }

    .banner.page-banner.get_price .banner-content .review-text {
        padding-bottom: 109px
    }

    .banner.page-banner.get_price .banner-content .services-list ul {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .banner.page-banner.get_price .banner-content .services-list ul li {
        padding: 0 5.5%;
        text-align: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 0
    }

    .banner.page-banner.get_price .banner-content .services-list ul li:after {
        content: "";
        display: block;
        width: 1px;
        height: 24px;
        background: #8a8a8a;
        position: absolute;
        right: -5px
    }

    .banner.page-banner.get_price .banner-content .services-list ul li:last-child:after {
        display: none
    }

    #brb_collection_4721 {
        min-height: 205px
    }

    .text_image_wrap .text_image_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 132px
    }

    .text_image_wrap .text_image_block:last-child {
        margin-bottom: 0
    }

    .text_image_wrap .text_image_block>div {
        width: 50%
    }

    .text_image_wrap .text_image_block .item_text {
        padding-right: 70px
    }

    .text_image_wrap .text_image_block .item_text .title {
        padding-bottom: 32px
    }

    .text_image_wrap .text_image_block .item_text .title h2 {
        letter-spacing: .15em;
        font-size: 13px;
        line-height: 16px;
        text-transform: uppercase
    }

    .text_image_wrap .text_image_block .item_image .image {
        width: 100%;
        position: relative
    }

    .text_image_wrap .text_image_block .item_image .image img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
        height: 100%;
        max-height: 584px;
        position: relative
    }

    .text_image_wrap .text_image_block:nth-child(2n) .item_text {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1;
        padding-right: 0;
        padding-left: 85px
    }

    .clining_menu {
        margin-top: 40px;
        max-width: 320px;
        width: 100%;
        padding: 40px;
        background: #ededeb
    }

    .clining_menu ul {
        margin: 0;
        padding: 0;
        position: relative
    }

    .clining_menu ul li {
        list-style: none;
        position: relative
    }

    .clining_menu ul li a {
        color: #303030;
        text-decoration: none
    }

    .clining_menu>ul>li>a {
        font-size: 22px;
        margin-bottom: 10px;
        display: block
    }

    .clining_menu>ul>li .sub-menu {
        padding-top: 15px
    }

    .clining_menu>ul>li .sub-menu:before {
        content: "";
        width: 40px;
        height: 2px;
        background: #377dff;
        top: 0;
        left: 0;
        display: block;
        position: absolute
    }

    .work-block.text_image_fuel .heading-block {
        padding-bottom: 0
    }

    .work-block.text_image_fuel .heading-block .heading-text {
        margin-bottom: 0
    }

    .work-block.text_image_fuel .heading-block .sub-para {
        margin-top: 40px;
        padding-bottom: 0;
        max-width: 100%
    }

    .text_image_fuel .btn_group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 74px;
        width: 100%
    }

    .text_image_fuel .btn_group .link_btn {
        padding: 0 5px;
        display: block;
        margin: 0
    }

    .text_image_fuel .btn_group .link_btn a {
        width: 180px;
        height: 55px;
        font-size: 17px;
        text-align: center;
        font-weight: 700;
        padding: 0;
        min-width: 0;
        display: inline-block;
        line-height: 55px
    }

    .text_image_fuel .btn_group .transparent_btn {
        padding: 0 5px;
        display: block;
        margin: 0;
        width: auto;
        height: auto;
        max-width: 100%
    }

    .text_image_fuel .btn_group .transparent_btn a {
        width: 180px;
        height: 55px;
        color: #303030;
        border: 1px solid #303030;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        display: inline-block;
        line-height: 55px;
        font-size: 17px;
        text-align: center;
        font-weight: 700;
        text-decoration: none;
        padding: 0;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .text_image_fuel .btn_group .transparent_btn a:hover {
        background-color: rgba(0,0,0,.1)
    }

    .text_image_fuel .image_group {
        margin-top: 55px;
        width: 100%;
        text-align: center
    }

    .text_image_fuel .text_group {
        margin-top: 67px
    }

    .image_list_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .image_list_block .item {
        width: 48%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .image_list_block .item .heading-block {
        text-align: left
    }

    .image_list_block .item .heading-block .heading-text {
        margin-bottom: 0
    }

    .image_list_block .item .heading-block .sub-para {
        margin-top: 57px;
        line-height: 30px;
        padding-bottom: 0
    }

    .image_list_block .item .heading-block .sub-para p {
        color: inherit
    }

    .image_list_block .item .heading-block .sub-para li {
        color: inherit
    }

    .image_list_block .item .text {
        -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
        align-self: flex-start;
        margin-top: 48px
    }

    .image_list_block ul {
        margin: 0;
        padding: 0
    }

    .image_list_block ul li {
        color: inherit;
        font-size: 13px;
        line-height: 30px;
        list-style: none;
        position: relative;
        padding-left: 40px;
        margin-bottom: 20px
    }

    .image_list_block ul li:before {
        content: "";
        background: #ccc;
        position: absolute;
        top: 12px;
        left: 0;
        width: 6px;
        height: 6px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: block
    }

    .toc_sitemap {
        text-align: left
    }

    .toc_sitemap h3 {
        padding-bottom: 0
    }

    .header {
        position: relative;
        z-index: 899;
        outline: 0;
        color: #fff;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        padding-bottom: 28px
    }

    .home .header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0
    }

    .nav-active .header {
        background: #377dff
    }

    @media(min-width: 1024px) {
        .nav-active .header {
            background:0 0
        }
    }

    .header-fixed .header {
        position: fixed;
        background: #377dff;
        top: 0;
        left: 0;
        right: 0;
        z-index: 899;
        padding-top: 15px;
        padding-bottom: 15px
    }

    .page-header {
        background: #fff;
        padding-bottom: 23px;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        color: #303030
    }

    .nav-active .page-header {
        background: #fff
    }

    .header-fixed .page-header {
        background: #fff
    }

    .logo {
        height: auto;
        position: relative;
        z-index: 6;
        width: 200px;
        min-width: 200px
    }

    .logo .black {
        display: none
    }

    .page-header .logo .black {
        display: block
    }

    .page-header .logo .white {
        display: none
    }

    .menu-activator {
        float: right;
        overflow: hidden;
        position: relative;
        z-index: 503;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 14px
    }

    .menu-activator .text,.menu-activator .nav-activator {
        display: inline-block;
        vertical-align: middle;
        padding: 10px 0
    }

    .menu-activator .text.text,.menu-activator .nav-activator.text {
        padding-right: 10px
    }

    .menu-activator .text.text b,.menu-activator .nav-activator.text b {
        font-weight: 400;
        position: absolute;
        opacity: 0
    }

    @media(min-width: 1024px) {
        .menu-activator {
            display:none
        }
    }

    .header-content {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        clear: both;
        font-size: 0;
        padding: 15px;
        line-height: 0;
        letter-spacing: -4px;
        transition: all 500ms ease;
        transform: translateY(-100%);
        text-align: center;
        z-index: 5;
        background: #4687ff;
        max-height: calc(100vh - 95px)
    }

    .header-fixed .header-content {
        max-height: calc(100vh - 75px)
    }

    .page-header .header-content {
        background: #d8d8d8
    }

    .nav-active .header-content {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
        top: 100%
    }

    @media(min-width: 1024px) {
        .header-content {
            clear:none;
            position: static;
            background: 0 0;
            padding: 0;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            min-height: 5px
        }

        .page-header .header-content {
            background: 0 0
        }
    }

    .header-content .header-navigation,.header-content .blue-btn {
        font-size: 14px;
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: 0
    }

    .header-content .header-navigation .button-contact,.header-content .blue-btn .button-contact {
        display: inline-block;
        vertical-align: top;
        padding: 8px 12px;
        background: #377dff;
        color: #fff;
        -webkit-border-radius: 2px;
        border-radius: 2px
    }

    @media(min-width: 1024px) {
        .header-content .header-navigation,.header-content .blue-btn {
            display:inline-block;
            vertical-align: middle
        }
    }

    .nav-activator {
        display: block;
        width: 22px;
        height: 18px;
        position: relative
    }

    .nav-activator:after,.nav-activator:before,.nav-activator span {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        overflow: hidden;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        height: 2px;
        background: #fff;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .page-header .nav-activator:after,.page-header .nav-activator:before,.page-header .nav-activator span {
        background: #303030
    }

    .nav-activator:after {
        top: 0
    }

    .nav-active .nav-activator:after {
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .nav-activator span {
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .nav-active .nav-activator span {
        opacity: 0
    }

    .nav-activator:before {
        bottom: 0
    }

    .nav-active .nav-activator:before {
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .header-navigation ul li {
        display: block;
        padding-bottom: 12px;
        text-align: center;
        line-height: 1.3;
        font-weight: 400
    }

    @media(min-width: 1024px) {
        .header-navigation ul li {
            display:inline;
            vertical-align: middle;
            padding: 0 20px;
            font-size: 15px
        }
    }

    .header-navigation ul li:first-child {
        padding-left: 0
    }

    .header-navigation ul li:last-child {
        padding-right: 0
    }

    .header-navigation ul li a {
        display: inline-block;
        vertical-align: top;
        text-decoration: none;
        color: #fff;
        -webkit-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .page-header .header-navigation ul li a {
        color: #303030
    }

    @media all and (min-width: 1023px) {
        .header-navigation>ul {
            display:-webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .header-navigation>ul>li {
            position: relative
        }

        .header-navigation>ul>li.menu-item-has-children>a {
            position: relative;
            padding-right: 12px
        }

        .header-navigation>ul>li.menu-item-has-children>a:before {
            content: "";
            position: absolute;
            right: 0;
            top: 7px;
            bottom: 0;
            margin: auto;
            border: 4px solid transparent;
            border-top: 4px solid #fff
        }

        .header-navigation>ul>li .sub-menu {
            position: absolute;
            background: #fff;
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,.33);
            box-shadow: 0 0 10px rgba(0,0,0,.33);
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 300ms;
            -o-transition: all 300ms;
            transition: all 300ms;
            left: 0;
            top: 50px;
            text-align: left;
            width: 200px
        }

        .header-navigation>ul>li .sub-menu li {
            padding: 8px 0 10px;
            position: relative;
            display: block;
            text-align: left
        }

        .header-navigation>ul>li .sub-menu li a {
            -webkit-transition: all 300ms;
            -o-transition: all 300ms;
            transition: all 300ms;
            color: #303030;
            font-size: 15px;
            line-height: 16px;
            display: inline-block;
            -webkit-transition: all 0ms;
            -o-transition: all 0ms;
            transition: all 0ms
        }

        .header-navigation>ul>li:hover .sub-menu {
            opacity: 1;
            visibility: visible;
            top: 100%
        }

        .header-navigation>ul>li>a .arrow .fa {
            display: none
        }

        .header .header-content .header-navigation>ul>li.menu-item-has-children>a:before {
            border-top: 6px solid #fff
        }

        .page-header .header-content .header-navigation>ul>li.menu-item-has-children>a:before {
            border-top: 6px solid #303030
        }
    }

    .banner {
        width: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        text-align: center;
        position: relative;
        background-position: 10% 30%;
        white-space: nowrap
    }

    @media(min-width: 1024px) {
        .banner {
            background-position:50% 50%
        }
    }

    .banner .banner-content {
        max-width: 100%;
        padding-top: 150px;
        display: inline-block;
        vertical-align: bottom;
        white-space: normal
    }

    .banner .container {
        position: relative;
        z-index: 3;
        padding-bottom: 40px;
        color: #fff
    }

    .banner .overlay-logo {
        position: absolute;
        z-index: 1;
        right: 20px;
        bottom: 20px;
        max-width: 160px
    }

    .banner .overlay-logo img {
        max-width: 100%;
        max-height: 60px;
        width: auto;
        height: auto
    }

    .banner-text {
        position: relative
    }

    .banner-text .overlay {
        z-index: 2
    }

    .banner-text .banner-content {
        position: relative;
        z-index: 6
    }

    .page-banner {
        color: #fff;
        padding: 60px 20px;
        position: relative;
        white-space: nowrap;
        background-position: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .page-banner:after {
        content: '';
        display: inline-block;
        vertical-align: middle;
        min-height: 320px
    }

    @media(min-width: 1024px) {
        .page-banner {
            min-height:500px
        }
    }

    .page-banner .container {
        padding-bottom: 0
    }

    .page-banner .banner-content {
        padding-top: 0;
        display: inline-block;
        vertical-align: middle;
        position: relative;
        z-index: 3;
        color: #fff;
        white-space: normal
    }

    .page-banner .heading-block {
        color: #fff;
        padding-bottom: 0
    }

    .page-banner .heading-block .heading-text {
        color: #fff;
        font-size: 30px;
        font-weight: 700
    }

    @media(min-width: 768px) {
        .page-banner .heading-block .heading-text {
            font-size:36px
        }
    }

    @media(min-width: 1024px) {
        .page-banner .heading-block .heading-text {
            font-size:59px
        }
    }

    .page-banner .heading-block .sub-para {
        padding-bottom: 0;
        max-width: 100%;
        font-size: 24px;
        line-height: 29px
    }

    .page-banner .heading-block .sub-para+.button-wrapper {
        padding: 38px 0 0
    }

    .apply-btn-holder {
        overflow: hidden
    }

    .apply-btn-holder .button-primary {
        display: block;
        max-width: 338px;
        margin: 0 auto;
        text-align: center;
        color: #fff;
        font-size: 15px;
        padding-top: 18px;
        padding-bottom: 18px;
        background: #377dff
    }

    .apply-btn-holder .button-primary:hover {
        background: #0052ea;
        background: #1e6cff
    }

    .banner-white {
        color: #fff;
        padding: 0
    }

    .banner-content .banner-title {
        font-size: 26px;
        margin-bottom: 10px
    }

    @media(min-width: 768px) {
        .banner-content .banner-title {
            font-size:50px
        }
    }

    .banner-content .banner-sub-title {
        font-size: 16px;
        padding-bottom: 15px
    }

    @media(min-width: 1024px) {
        .banner-content .banner-sub-title {
            font-size:20px;
            padding-bottom: 20px
        }
    }

    @media(min-width: 1024px) {
        .banner-content .banner-sub-title {
            font-size:24px;
            padding-bottom: 30px
        }
    }

    .banner-content .banner-sub-title p {
        margin-bottom: 10px
    }

    .banner-content .banner-sub-title p:last-child {
        margin-bottom: 0
    }

    .banner-content .form-booking {
        padding-bottom: 14px
    }

    .banner-content .review-text {
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px;
        padding: 14px 0 60px
    }

    .banner-content .review-text .stars,.banner-content .review-text .review-banner-text {
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0;
        padding-bottom: 10px
    }

    @media(min-width: 768px) {
        .banner-content .review-text .stars,.banner-content .review-text .review-banner-text {
            display:inline-block;
            vertical-align: middle;
            padding-bottom: 0
        }
    }

    .banner-content .review-text .stars {
        font-size: 16px
    }

    @media(min-width: 768px) {
        .banner-content .review-text .stars {
            padding-right:12px
        }
    }

    .banner-content .review-text .stars li {
        display: inline-block;
        vertical-align: top;
        padding: 0 1px;
        color: #f6921e
    }

    .banner-content .review-text .stars li:after {
        content: ''
    }

    .banner-content .review-text .stars li:first-child {
        padding-left: 0
    }

    .banner-content .review-text .stars li:last-child {
        padding-right: 0
    }

    .banner-service {
        text-align: center
    }

    .banner-service ul {
        margin: 0;
        padding: 0
    }

    .banner-service ul li {
        display: inline-block;
        vertical-align: top;
        position: relative;
        font-size: 18px;
        padding: 0 27px;
        margin-bottom: 10px
    }

    @media(min-width: 1024px) {
        .banner-service ul li {
            padding:0 40px;
            margin: 0
        }
    }

    .banner-service ul li:before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/bullet.png);
        background-repeat: no-repeat;
        width: 24px;
        height: 24px;
        margin-right: 14px;
        z-index: 1
    }

    @media(min-width: 1024px) {
        .banner-service ul li:after {
            content:'';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 1px;
            background: gray
        }
    }

    .banner-service ul li:last-child:after {
        display: none
    }

    .banner-service ul li .text {
        display: inline-block;
        vertical-align: middle;
        overflow: hidden
    }

    .background-video-wrapper {
        position: relative;
        overflow: hidden;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
        position: relative;
        white-space: nowrap
    }

    .background-video-wrapper:after {
        content: '';
        display: inline-block;
        vertical-align: middle;
        min-height: 660px
    }

    .background-video-wrapper .banner-content .form-booking {
        min-height: 340px
    }

    @media(min-width: 1024px) {
        .background-video-wrapper:after {
            min-height:800px
        }
    }

    .background-video-wrapper .background-video {
        display: none;
        position: absolute;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        -o-object-fit: cover;
        object-fit: cover;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        white-space: normal
    }

    @media(min-width: 768px) {
        .background-video-wrapper .background-video {
            display:block
        }
    }

    .background-video-wrapper .bg-video-mobile {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    @media(min-width: 768px) {
        .background-video-wrapper .bg-video-mobile {
            display:none
        }
    }

    .booking-form {
        max-width: 400px;
        margin: 0 auto
    }

    @media(min-width: 768px) {
        .booking-form {
            max-width:630px
        }
    }

    .booking-form .gform_button {
        width: 100%;
        border: 0;
        color: #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        padding: 10px;
        height: 48px;
        background: #f6921e;
        font-size: 14px;
        font-weight: 700;
        outline: 0!important;
        border-bottom: 4px solid #e77c00
    }

    .booking-form .gform_button:hover {
        background: #f1860a
    }

    .booking-form .validation_message {
        display: none
    }

    .booking-form .gfield.gfield_error input {
        border-bottom-color: red
    }

    .booking-form .gfield .ginput_container {
        padding: 0
    }

    .booking-form .gfield.gfield-incrementer {
        position: relative;
        background: #fff
    }

    @media(min-width: 768px) {
    }

    .booking-form .gfield.gfield-incrementer .button-increment {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        text-align: center;
        width: 24px;
        height: 24px;
        font-size: 16px;
        line-height: 1;
        letter-spacing: 0;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        -webkit-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        cursor: pointer
    }

    .booking-form .gfield.gfield-incrementer .button-increment svg path {
        transition: all 300ms
    }

    .booking-form .gfield.gfield-incrementer .button-increment:hover svg path {
        fill: #f1860a
    }

    .booking-form .gfield.gfield-incrementer .minus-button {
        left: 10px
    }

    .booking-form .gfield.gfield-incrementer .plus-button {
        right: 10px
    }

    .booking-form .gform_body ul li {
        padding: 0
    }

    .booking-form .gform_body input,.booking-form .gform_body select {
        overflow: hidden;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        width: 100%;
        border: 0;
        -webkit-appearance: none;
        background: #fff;
        height: 48px;
        color: #303030;
        outline: 0!important;
        border-bottom: 2px solid transparent
    }

    .booking-form .gform_body select.gfield_select {
        text-align: center;
        padding: 8px 45px
    }

    .booking-form .gform_wrapper.gravity-theme .gform_footer {
        margin: 0;
        padding: 0
    }

    .booking-form .gform_wrapper.gravity-theme .gform_footer input {
        margin-bottom: 0
    }

    .booking-form .gform_wrapper.gravity-theme .gform_fields {
        grid-column-gap: 0;
        -ms-grid-columns: (1fr 0) [12];
        grid-row-gap: 12px;
        display: grid;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows: repeat(auto-fill,auto);
        width: 100%
    }

    @media(min-width: 768px) {
        .booking-form .gform_body .booking-form-email {
            padding-right:10px;
            position: relative
        }

        .booking-form .gform_body .booking-form-email:after {
            content: '';
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            right: -1px;
            width: 1px;
            height: 80%;
            background: #bfbfbf
        }

        div.booking-form .gform_body .gfield_left div.ginput_container input[aria-invalid=true] {
            border-right: 0;
            border-left: 0;
            border-top: 0
        }

        .booking-form .gform_body .gfield_left input {
            border-radius: 4px 0 0 4px
        }

        .booking-form .gform_body .gfield_center select {
            border-radius: 0
        }

        .booking-form .gform_body .gfield_right select {
            border-radius: 0 4px 4px 0
        }

        .booking-form .gform_body .gfield_center:after {
            content: '';
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            left: -1px;
            width: 1px;
            height: 80%;
            background: #bfbfbf;
            z-index: 1
        }

        .booking-form .gform_body .gfield_center:before {
            content: '';
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            right: -1px;
            width: 1px;
            height: 80%;
            background: #bfbfbf;
            z-index: 1
        }
    }

    @media(min-width: 768px) {
        .booking-form .gform_body .booking-form-number {
            padding-left:10px
        }
    }

    @media all and (max-width: 768px) {
        .booking-form .gform_wrapper.gravity-theme .gfield:not(.gfield--width-full) {
            grid-column:1/-1
        }
    }

    .booking-form .gform_body .gfield-incrementer {
        position: relative
    }

    @media(min-width: 768px) {
        .booking-form ul.inputfields {
            overflow:hidden;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            margin-bottom: 10px
        }

        .booking-form ul.inputfields input {
            margin: 0;
            -webkit-border-radius: 0!important;
            border-radius: 0!important
        }

        .booking-form ul.inputfields .gfield {
            margin-bottom: 0
        }
    }

    .booking-form form {
        display: flex;
        flex-direction: column
    }

    .booking-form .validation_error {
        order: 3;
        padding: 10px 15px;
        color: red;
        margin-top: 10px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        background: #fff
    }

    .booking-form .gform_footer img {
        display: none!important
    }

    .services-pricing .banner.page-banner {
        padding: 100px 20px
    }

    .services-pricing .banner.page-banner .heading-text {
        padding-bottom: 15px
    }

    .services-pricing .banner.page-banner .banner-content {
        width: 100%
    }

    .services-pricing .heading-block {
        padding-bottom: 40px
    }

    .services-pricing .review-text {
        padding-bottom: 85px
    }

    .services-pricing .contact-form,.services-pricing .gform_body {
        overflow: visible
    }

    .services-pricing .booking-form ul.inputfields {
        -webkit-box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        -webkit-border-radius: 5px;
        border-radius: 5px;
        overflow: hidden
    }

    .services-pricing .booking-form ul.inputfields .gfield {
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    .services-pricing .gform_fields.description_below.column.column_3 input {
        -webkit-box-shadow: 0 0 9px -2px rgba(0,0,0,.3);
        box-shadow: 0 0 9px -2px rgba(0,0,0,.3)
    }

    .list-block {
        max-width: 1030px
    }

    .list-block.services-list ul {
        width: 100%;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .list-block.services-list ul li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
        padding-bottom: 0;
        margin: 0 10px
    }

    .list-block.services-list ul li:before {
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/bullet.png);
        background-repeat: no-repeat;
        width: 24px;
        height: 24px;
        margin-right: 14px;
        z-index: 1;
        position: relative;
        top: 0;
        display: inline-table
    }

    .list-block.services-list ul li:after {
        display: none
    }

    .banner_logo {
        position: absolute;
        z-index: 3;
        display: block;
        bottom: -83px
    }

    .w-bottom-bar-right.w-css-reset {
        display: none!important
    }

    #wistia_chrome_24 #wistia_grid_32_wrapper div.w-css-reset {
        display: none!important
    }

    .wistia_responsive_padding,.wistia_embed {
        position: absolute!important;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        -o-object-fit: contain;
        object-fit: contain;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        white-space: normal
    }

    .wistia_responsive_padding iframe,.wistia_embed iframe {
        height: 100%!important
    }

    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        overflow: hidden;
        max-width: 100%;
        height: auto
    }

    .embed-container iframe,.embed-container object,.embed-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    #wistia_video {
        height: 100%!important;
        width: 100%!important
    }

    .banner-text {
        padding: 30px;
        min-height: 500px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .banner-text .heading-block {
        max-width: 100%
    }

    .banner-text .heading-block .heading-text {
        font-weight: 700;
        margin-bottom: 24px;
        font-size: 40px
    }

    @media(min-width: 1024px) {
        .banner-text .heading-block .heading-text {
            font-size:59px;
            margin-bottom: 30px;
            line-height: 59px
        }
    }

    @media(min-width: 768px) {
        .banner-text .heading-block .sub-para {
            max-width:830px;
            margin: 0 auto
        }
    }

    @media(min-width: 1024px) {
        .banner-text .heading-block .sub-para {
            max-width:830px;
            font-size: 24px;
            line-height: 29px
        }
    }

    .work-block {
        padding: 103px 0 87px;
        overflow: hidden
    }

    .work-block .heading-block {
        padding-bottom: 16px
    }

    @media(min-width: 768px) {
        .work-block .heading-text {
            margin-bottom:41px
        }
    }

    .work-block .step-icon {
        margin-bottom: 22px
    }

    @media(min-width: 768px) {
        .work-block .container {
            overflow:hidden
        }
    }

    .working-steps {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .working-steps .step-wrap {
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0;
        text-align: center;
        padding-bottom: 15px;
        max-width: 360px;
        margin: 0 auto;
        margin-bottom: 25px
    }

    @media(min-width: 768px) {
        .working-steps .step-wrap {
            width:auto;
            display: inline-block;
            vertical-align: top;
            padding: 0 42px 10px;
            position: relative
        }
    }

    .reason-block .working-steps .step-wrap {
        padding: 0 27px
    }

    .working-steps .step-wrap .step-icon {
        margin: 0 auto;
        height: 90px;
        margin-bottom: 22px;
        white-space: nowrap;
        max-width: 80px
    }

    .working-steps .step-wrap .step-icon:after {
        content: '';
        display: inline-block;
        vertical-align: middle;
        height: 100%
    }

    .working-steps .step-wrap .step-icon img {
        white-space: normal;
        display: inline-block;
        vertical-align: middle;
        width: auto;
        height: auto;
        max-width: 100%
    }

    .working-steps .step-wrap .step-content {
        color: #5c5c5c;
        line-height: 1.6;
        font-size: 16px
    }

    @media(min-width: 1024px) {
        .working-steps .step-wrap .step-content {
            font-size:17px
        }
    }

    .working-steps .step-wrap .step-content .step-title {
        display: block;
        font-size: 30px;
        margin-bottom: 20px;
        line-height: 1.3;
        color: #303030
    }

    @media(min-width: 1024px) {
        .hiring-process .working-steps .step-wrap .step-content .step-title {
            font-size:30px
        }
    }

    .reason-block .working-steps .step-wrap .step-content .step-title {
        font-size: 20px
    }

    .working-steps+.button-wrapper {
        padding-top: 26px;
        text-align: center
    }

    .gurantee-block {
        background: #ededeb;
        position: relative;
        text-align: center;
        padding: 80px 0
    }

    @media(min-width: 768px) {
        .gurantee-block {
            text-align:left
        }
    }

    @media(min-width: 1024px) {
        .gurantee-block {
            padding:93px 20px
        }
    }

    .gurantee-block .container {
        overflow: hidden
    }

    .gurantee-block .cleanzen-badge {
        max-width: 174px;
        height: auto;
        padding: 20px 0
    }

    @media(min-width: 768px) {
        .gurantee-block .cleanzen-badge {
            position:absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            padding: 0;
            width: 174px
        }
    }

    .gurantee-block .block {
        font-size: 16px;
        line-height: 1.6;
        letter-spacing: 0;
        color: #5c5c5c
    }

    @media(min-width: 768px) {
        .gurantee-block .block {
            width:50%;
            display: inline-block;
            vertical-align: middle;
            padding-left: 119px
        }
    }

    @media(min-width: 1024px) {
        .gurantee-block .block {
            font-size:18px
        }
    }

    .gurantee-block .block p {
        margin-bottom: 10px
    }

    .gurantee-block .block p:last-child {
        margin-bottom: 0
    }

    .gurantee-block .block .block-leading-text {
        font-weight: 700;
        color: #303030;
        letter-spacing: .2em;
        font-size: 18px
    }

    @media(min-width: 1024px) {
        .gurantee-block .block .block-leading-text {
            font-size:21px
        }
    }

    .gurantee-block .block .block-leading-text span {
        display: block;
        font-size: 17px;
        font-weight: 400;
        color: #377dff
    }

    @media(min-width: 768px) {
        .gurantee-block .block.right {
            text-align:right;
            padding-left: 0;
            padding-right: 106px
        }
    }

    .about-block {
        text-align: center
    }

    @media(min-width: 1024px) {
        .about-block {
            text-align:left
        }
    }

    .about-block .heading {
        font-weight: 400;
        line-height: 1.6;
        color: #303030;
        font-size: 20px;
        max-width: 600px;
        margin: 0 auto 30px
    }

    @media(min-width: 768px) {
        .about-block .heading {
            font-size:26px
        }
    }

    @media(min-width: 1024px) {
        .about-block .heading {
            margin:0 0 30px
        }
    }

    .about-block .heading span {
        font-size: 28px;
        line-height: 1.2
    }

    @media(min-width: 768px) {
        .about-block .heading span {
            display:block;
            font-size: 34px
        }
    }

    .about-block .heading b {
        color: #377dff;
        font-weight: 400
    }

    .about-block .block {
        padding: 0;
        width: 100%;
        vertical-align: top
    }

    @media(min-width: 1024px) {
        .about-block .block {
            width:50%
        }
    }

    .about-block .block.video-block {
        text-align: center;
        padding: 20px 0;
        max-width: 480px;
        display: block;
        margin: 0 auto
    }

    .about-block .block.video-block .video {
        display: inline-block;
        vertical-align: top
    }

    @media(min-width: 1024px) {
        .about-block .block.video-block {
            padding:10px;
            padding-left: 8%;
            position: relative;
            max-width: 100%;
            display: inline-block
        }

        .about-block .block.video-block .video {
            float: right
        }
    }

    .about-company {
        position: relative;
        text-align: center;
        max-width: 840px
    }

    .gurantee-block .about-company {
        display: block;
        margin: 0 auto
    }

    @media(min-width: 768px) {
        .gurantee-block .about-company {
            width:100%;
            display: block;
            padding-left: 0
        }
    }

    @media(min-width: 1024px) {
        .about-company {
            text-align:left;
            max-width: 100%
        }

        .gurantee-block .about-company {
            display: inline-block;
            width: 50%
        }
    }

    .about-company .detail-info-holder {
        padding-left: 0;
        padding-right: 0
    }

    .about-company .info-about-block {
        padding-bottom: 40px;
        max-width: 600px;
        margin: 0 auto
    }

    @media(min-width: 1024px) {
        .about-company .info-about-block {
            max-width:100%;
            padding-right: 0
        }
    }

    .detail-info-holder {
        overflow: hidden;
        padding: 0 16px
    }

    .detail-info-holder .holder {
        margin: 0 -20px
    }

    .detail-info-holder .detail-info {
        display: block;
        font-size: 16px;
        line-height: 1.6;
        letter-spacing: 0;
        padding: 0 20px 15px;
        position: relative
    }

    @media(min-width: 1024px) {
        .detail-info-holder .detail-info:after {
            content:'';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 26px;
            width: 1px;
            background: #d0d0d0
        }
    }

    @media(min-width: 768px) {
        .detail-info-holder .detail-info {
            width:100%;
            max-width: 260px;
            display: inline-block;
            vertical-align: top;
            padding-bottom: 20px
        }
    }

    .detail-info-holder .detail-info .info-header {
        display: block;
        font-size: 13px;
        color: #303030;
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
        letter-spacing: .2em
    }

    @media(min-width: 1024px) {
        .detail-info-holder .detail-info .info-header {
            padding-bottom:8px
        }
    }

    .detail-info-holder .detail-info address {
        font-style: normal
    }

    .detail-info-holder .detail-info ul li {
        display: block;
        padding-bottom: 10px
    }

    .detail-info-holder .detail-info:last-child .info-header:after {
        display: none
    }

    .video-wrapper {
        position: relative;
        overflow: hidden
    }

    @media(min-width: 1024px) {
        .video-wrapper {
            max-width:470px;
            max-height: 320px;
            margin: 0 auto
        }
    }

    .video-wrapper .play-icon {
        width: 80px;
        height: 80px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        display: block;
        text-decoration: none;
        color: #fff;
        z-index: 5;
        outline: 0;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .video-wrapper .play-icon svg path {
        transition: all 300ms
    }

    .video-wrapper .play-icon:hover svg path {
        fill: #f1860a
    }

    .video-wrapper img {
        width: 100%;
        height: auto;
        vertical-align: top
    }

    .faq-block {
        overflow: hidden;
        background: #377dff
    }

    .faq-block .block {
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0;
        color: #fff;
        padding: 20px 15px
    }

    @media(min-width: 768px) {
        .faq-block .block {
            width:50%;
            display: inline-block;
            vertical-align: middle;
            padding: 0;
            padding: 15px
        }
    }

    .faq-block .block .faq-heading {
        font-size: 36px;
        margin-bottom: 30px
    }

    @media(min-width: 1024px) {
        .faq-block .block .faq-heading {
            font-size:40px
        }
    }

    @media(min-width: 1024px) {
        .faq-block .block .faq-heading {
            font-size:46px;
            margin-bottom: 30px
        }
    }

    .faq-block .block.faq-image {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        position: relative;
        min-height: 300px
    }

    @media(min-width: 768px) {
        .faq-block .block.faq-image {
            min-height:550px
        }
    }

    .faq-block .block.faq-image .overlay {
        background: #fff
    }

    .faq-block {
        text-align: right;
        overflow: hidden
    }

    .faq-block .text-faq {
        text-align: center
    }

    @media(min-width: 768px) {
        .faq-block .text-faq {
            padding-right:50px;
            float: right;
            max-width: 585px;
            text-align: right;
            padding-left: 15px
        }
    }

    @media(min-width: 1024px) {
        .faq-block .text-faq {
            text-align:left
        }
    }

    .review-block {
        padding: 104px 0 50px;
        background: #ededeb
    }

    .review-block .heading-block {
        padding-bottom: 33px
    }

    .review-block .heading-block .heading-text {
        margin-bottom: 18px
    }

    .review-block .heading-block .heading-text img {
        display: inline-block;
        vertical-align: middle
    }

    .review-block .button-wrapper {
        text-align: center
    }

    .reviews-holder {
        white-space: nowrap;
        position: relative;
        outline: 0;
        padding-bottom: 40px
    }

    .reviews-holder .slick-list {
        margin-left: -15px;
        margin-right: -15px;
        overflow: hidden
    }

    .reviews-holder .slick-arrow {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0;
        z-index: 5;
        outline: 0;
        border: 0;
        padding: 0;
        background: 0 0;
        opacity: .6;
        color: #303030;
        -webkit-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease
    }

    .reviews-holder .slick-arrow:hover {
        opacity: .9
    }

    .reviews-holder .slick-arrow.arrow-prev {
        left: 0
    }

    @media(min-width: 1200px) {
        .reviews-holder .slick-arrow.arrow-prev {
            left:-50px
        }
    }

    .reviews-holder .slick-arrow.arrow-next {
        right: 0;
        -webkit-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left
    }

    @media(min-width: 1200px) {
        .reviews-holder .slick-arrow.arrow-next {
            right:-50px
        }
    }

    .reviews-holder .review-wrap {
        width: 33.33%;
        display: inline-block;
        vertical-align: top;
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0;
        padding: 0 15px;
        white-space: normal;
        outline: 0
    }

    .review {
        background: #fff;
        padding: 20px 30px;
        outline: 0
    }

    .review .review-title {
        color: #303030;
        font-size: 18px;
        margin-bottom: 24px;
        outline: 0
    }

    .review .review-info {
        font-size: 14px;
        padding-bottom: 26px;
        border-bottom: 1px solid #d0d0d0;
        color: #5c5c5c;
        outline: 0
    }

    .review-footer {
        padding: 15px 0 0;
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px;
        outline: 0
    }

    .review-footer .user-profile {
        width: 80%;
        display: inline-block;
        vertical-align: bottom;
        outline: 0
    }

    .review-footer .user-profile .profile-pic {
        display: inline-block;
        vertical-align: bottom;
        margin-right: 9px
    }

    .review-footer .user-profile .profile-pic a {
        display: block;
        width: 43px;
        height: 43px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        overflow: hidden
    }

    .review-footer .user-profile .stars-rating {
        padding-bottom: 8px
    }

    .review-footer .user-profile .profile-names {
        display: inline-block;
        vertical-align: bottom;
        font-size: 13px;
        line-height: 1.3;
        letter-spacing: 0;
        color: #bfbfbf
    }

    .review-footer .cleaned-room {
        width: 20%;
        display: inline-block;
        vertical-align: bottom;
        font-size: 13px;
        line-height: 1.3;
        letter-spacing: 0;
        text-align: right;
        color: #bfbfbf
    }

    .review-footer .cleaned-room span {
        display: inline-block;
        vertical-align: top
    }

    .review-footer .cleaned-room span.icon {
        padding-left: 7px
    }

    .satisfaction-block {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        padding: 80px 0;
        position: relative
    }

    .satisfaction-block .container {
        position: relative;
        z-index: 3
    }

    .satisfaction-block .overlay {
        background: #fff
    }

    .satisfaction-block .heading-block {
        padding: 0
    }

    .satisfaction-block .heading-block .heading-text {
        font-weight: 400;
        line-height: 1.3;
        margin-bottom: 18px
    }

    .satisfaction-block .heading-block .heading-text b {
        display: block;
        font-weight: 400;
        font-size: 38px
    }

    @media(min-width: 1024px) {
        .satisfaction-block .heading-block .heading-text b {
            font-size:68px
        }
    }

    .faq-page-block {
        padding: 110px 0;
        background: #fff
    }

    .faq-page-block * {
        outline: 0
    }

    .faq-menu-activator {
        display: inline-block;
        vertical-align: top;
        font-size: 12px;
        text-decoration: none;
        color: #303030;
        position: relative;
        margin-left: 8px;
        width: 25px;
        height: 25px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        overflow: hidden;
        color: #fff;
        background: #84afff;
        position: absolute;
        top: 10px;
        right: 10px;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .faq-menu-activator .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%) rotate(-90deg);
        -ms-transform: translate(-50%,-50%) rotate(-90deg);
        transform: translate(-50%,-50%) rotate(-90deg)
    }

    .faq-menu-activator:hover {
        background: #518eff
    }

    @media(min-width: 768px) {
        .faq-menu-activator {
            display:none
        }
    }

    .faq-column-holder {
        position: relative;
        overflow: hidden;
        padding-top: 80px
    }

    @media(min-width: 768px) {
        .faq-column-holder {
            padding-top:0;
            padding-left: 30%
        }
    }

    .faq-column-holder .col {
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0;
        padding-bottom: 10px
    }

    .faq-column-holder .col:first-child {
        padding-left: 0
    }

    .faq-column-holder .col:last-child {
        padding-right: 0;
        padding-bottom: 0
    }

    .faq-column-holder .col .block-header-text {
        font-size: 18px;
        text-align: left;
        font-weight: 700;
        line-height: 1.667;
        margin-bottom: 18px;
        position: relative;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        z-index: 3
    }

    .faq-column-holder .col .block-header-text.text-btn-holder {
        padding: 10px;
        padding-right: 25px;
        background: #518eff;
        color: #fff;
        z-index: 5;
        margin-bottom: 0
    }

    @media(min-width: 768px) {
        .faq-column-holder .col .block-header-text.text-btn-holder {
            padding:0;
            background: 0 0;
            padding: 0;
            color: #303030;
            margin-bottom: 18px
        }
    }

    @media(min-width: 768px) {
        .faq-column-holder .col {
            width:30%;
            display: inline-block;
            vertical-align: top;
            padding: 0 10px
        }

        .faq-column-holder .col.content-block {
            width: 100%
        }
    }

    .faq-column-holder .col .col-block {
        padding-bottom: 78px
    }

    .faq-menu-block {
        overflow: hidden
    }

    .faq-menu-block .block-header-text {
        position: relative;
        margin: 0
    }

    @media(min-width: 768px) {
        .faq-menu-block .block-header-text {
            margin-bottom:37px
        }
    }

    @media(min-width: 768px) {
        .faq-menu-block .block-column-menu {
            padding-top:18px;
            display: block!important
        }
    }

    .faq-menu-block .block-column-menu ul {
        padding: 10px
    }

    @media(min-width: 768px) {
        .faq-menu-block .block-column-menu ul {
            padding:0
        }
    }

    .faq-menu-block .block-column-menu ul li {
        display: block;
        padding-bottom: 10px;
        font-size: 14px
    }

    .faq-menu-block .block-column-menu ul li:last-child {
        padding-bottom: 0
    }

    .faq-menu-block .block-column-menu ul li a {
        display: block;
        text-decoration: none;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        color: #fff
    }

    .faq-menu-block .block-column-menu ul li a:hover {
        color: #bfbfbf
    }

    .unboxed-style .faq-menu-block .block-column-menu ul li a.anchor-active {
        color: #fff
    }

    @media(min-width: 768px) {
        .unboxed-style .faq-menu-block .block-column-menu ul li a.anchor-active {
            color:#377dff
        }
    }

    @media(min-width: 768px) {
        .faq-menu-block .block-column-menu ul li a {
            color:#303030
        }

        .faq-menu-block .block-column-menu ul li a:hover {
            color: #707070
        }
    }

    .sticky-wrap-col .faq-menu-block {
        top: 0;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 9;
        -webkit-transition: padding-top .3s linear;
        -o-transition: padding-top .3s linear;
        transition: padding-top .3s linear
    }

    .sticky-wrap-col.fixed-position .faq-menu-block {
        padding-top: 20px
    }

    .wrap-column-faq {
        background: #377dff;
        position: relative;
        z-index: 56
    }

    @media(min-width: 768px) {
        .wrap-column-faq {
            background:0 0
        }
    }

    .accordian-opener {
        display: inline-block;
        vertical-align: top;
        width: 14px;
        height: 14px;
        position: relative;
        padding: 6px 0;
        overflow: hidden
    }

    .accordian-opener:after,.accordian-opener:before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        height: 2px;
        background: #377dff;
        -webkit-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .accordian-opener:before {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .active .accordian-opener:before {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    .questions-wrapper {
        overflow: hidden
    }

    .questions-wrapper .faq {
        background: #ededeb;
        color: #5c5c5c;
        border-bottom: 1px solid #fff;
        padding: 20px 35px
    }

    .unboxed-style .questions-wrapper .faq {
        background: 0 0;
        border-bottom: 1px solid #d0d0d0;
        padding: 20px 35px
    }

    @media(min-width: 768px) {
        .questions-wrapper .faq {
            padding:30px 65px
        }
    }

    @media(min-width: 1024px) {
        .questions-wrapper .faq {
            padding:35px 70px
        }
    }

    .questions-wrapper .faq .question-holder {
        position: relative
    }

    .questions-wrapper .faq .question-holder .question {
        line-height: 1.25;
        text-align: left;
        font-weight: 400;
        color: #303030;
        cursor: pointer;
        font-size: 18px
    }

    .unboxed-style .questions-wrapper .faq .question-holder .question {
        color: #377dff
    }

    @media(min-width: 768px) {
        .questions-wrapper .faq .question-holder .question {
            font-size:20px
        }
    }

    @media(min-width: 1024px) {
        .questions-wrapper .faq .question-holder .question {
            font-size:24px
        }
    }

    .questions-wrapper .faq .question-holder .accordian-opener {
        position: absolute;
        top: 0;
        left: -25px
    }

    @media(min-width: 768px) {
        .questions-wrapper .faq .question-holder .accordian-opener {
            top:6px;
            left: -31px
        }
    }

    .questions-wrapper .faq .answer-holder {
        line-height: 1.5;
        margin-top: 35px;
        font-size: 14px
    }

    .unboxed-style .questions-wrapper .faq .answer-holder {
        margin-top: 15px
    }

    @media(min-width: 768px) {
        .questions-wrapper .faq .answer-holder {
            font-size:16px
        }
    }

    .about-page-block {
        padding: 101px 0;
        overflow: hidden
    }

    .text-block {
        max-width: 575px;
        margin: 0 auto;
        line-height: 1.4;
        color: #5c5c5c;
        font-size: 16px
    }

    @media(min-width: 1024px) {
        .text-block {
            font-size:18px
        }
    }

    .text-block .header-text {
        font-size: 36px;
        font-weight: 400;
        margin-bottom: 15px;
        color: #303030
    }

    @media(min-width: 1024px) {
        .text-block .header-text {
            font-size:46px;
            text-align: center
        }
    }

    .text-block .text-header {
        font-size: 32px;
        font-weight: 400;
        margin-bottom: 20px;
        color: #303030
    }

    @media(min-width: 1024px) {
        .text-block .text-header {
            font-size:36px;
            margin-bottom: 35px
        }
    }

    .text-block .info {
        padding-bottom: 37px
    }

    .text-block .info p {
        margin-bottom: 15px
    }

    .text-block .info p::last-child {
        margin-bottom: 0
    }

    .text-block .info-center {
        padding-bottom: 45px;
        text-align: center;
        color: #303030
    }

    @media(min-width: 1024px) {
        .text-block .info-center {
            font-size:20px
        }
    }

    .text-block .info-center p {
        margin-bottom: 10px
    }

    .text-block .info-center p::last-child {
        margin-bottom: 0
    }

    .lists-wrapper {
        padding-bottom: 46px;
        overflow: hidden
    }

    .lists-wrapper ul li {
        color: #303030;
        overflow: hidden;
        position: relative;
        padding-left: 32px;
        padding-bottom: 15px
    }

    @media(min-width: 768px) {
        .lists-wrapper ul li {
            width:50%;
            float: left;
            padding-right: 10px;
            padding-bottom: 20px
        }
    }

    .lists-wrapper ul li::before {
        content: '';
        position: absolute;
        top: 6px;
        left: 0;
        width: 8px;
        height: 8px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        background: #c3c3c3;
        color: #c3c3c3;
        overflow: hidden;
        z-index: 1
    }

    .image-block {
        clear: both;
        overflow: hidden;
        padding-bottom: 40px
    }

    @media(min-width: 768px) {
        .image-block {
            margin:-15px -15px 0
        }
    }

    .image-block .img {
        vertical-align: top;
        overflow: hidden;
        position: relative
    }

    .image-block .img .overlay {
        background: #fff;
        opacity: .5
    }

    @media(min-width: 768px) {
        .image-block .img {
            width:50%;
            display: inline-block;
            vertical-align: top;
            padding: 15px
        }
    }

    .image-block .img img {
        width: 100%;
        height: auto
    }

    .login-block {
        padding: 0;
        background: #ededeb;
        overflow: hidden
    }

    .login-block .heading-title {
        overflow: hidden;
        text-align: center;
        font-weight: 700;
        font-size: 18px
    }

    @media(min-width: 1024px) {
        .login-block .heading-title {
            font-size:36px;
            color: #303030;
            padding-bottom: 130px
        }
    }

    .login-block .heading-title .heading-text {
        font-weight: 700;
        margin-bottom: 0
    }

    @media(min-width: 1024px) {
        .login-block .heading-title .heading-text {
            font-size:68px;
            line-height: 68px
        }
    }

    .login-block .heading-title .sub-para {
        padding: 0
    }

    .form-wrapper-login {
        background: #fff;
        min-height: 640px
    }

    .form-wrapper-login .heading-block .sub-para {
        padding-bottom: 0
    }

    .form-wrapper-login .login-form {
        max-width: 430px;
        margin: 0 auto
    }

    .form-wrapper-login .login-form .inputfield {
        padding-bottom: 20px
    }

    .form-wrapper-login .login-form input,.form-wrapper-login .login-form textarea {
        width: 100%;
        outline: 0;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        background: #fff;
        padding: 17px 22px;
        border: 1px solid #d7d7d7;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        overflow: hidden
    }

    .form-wrapper-login .login-form input:focus,.form-wrapper-login .login-form textarea:focus {
        border-color: #a4a4a4
    }

    .form-wrapper-login .login-form .link {
        display: block;
        text-decoration: none;
        color: #377dff;
        padding-bottom: 15px
    }

    .form-wrapper-login iframe {
        max-width: 100%;
        width: 100%;
        display: block
    }

    .services-block {
        overflow: hidden
    }

    .services-block .heading-text {
        font-weight: 700
    }

    @media(min-width: 1024px) {
        .services-block .heading-text {
            font-size:68px;
            margin-bottom: 43px
        }
    }

    .services-block .sub-para {
        max-width: 690px;
        margin: 0 auto
    }

    .services-block .info-service {
        font-size: 18px;
        padding-bottom: 40px
    }

    .services-list li:after {
        content: '';
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/bullet.png);
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px;
        width: 18px;
        height: 18px
    }

    @media(min-width: 768px) {
        .services-list li:after {
            width:24px;
            height: 24px
        }
    }

    .services-list-wrapper {
        overflow: hidden;
        margin: auto;
        max-width: 1170px
    }

    .services-list-wrapper .info-service {
        font-size: 16px;
        padding-bottom: 20px
    }

    @media(min-width: 768px) {
        .services-list-wrapper .info-service {
            font-size:18px;
            padding-bottom: 40px
        }
    }

    .services-list-wrapper .service-header-text {
        margin-bottom: 23px;
        font-size: 30px
    }

    @media(min-width: 768px) {
        .services-list-wrapper .service-header-text {
            font-size:46px;
            margin-bottom: 23px
        }
    }

    .services-list-wrapper .non-services {
        text-align: center;
        overflow: hidden;
        padding: 80px 0
    }

    @media(min-width: 1024px) {
        .services-list-wrapper .non-services {
            padding:100px 0
        }
    }

    @media(min-width: 1024px) {
        .services-list-wrapper .non-services {
            padding:120px 0
        }
    }

    @media(min-width: 768px) {
        .services-list-wrapper .non-services .service-header-text {
            font-size:36px
        }
    }

    .services-list-wrapper .non-services .list-block-service {
        overflow: hidden
    }

    .services-list-wrapper .non-services .list-block-service li {
        display: inline-block;
        vertical-align: top;
        position: relative;
        padding-left: 0;
        padding: 0 10px 10px
    }

    .services-list-wrapper .non-services .list-block-service li:before {
        content: "";
        right: auto;
        left: -5px;
        background: #c3c3c3;
        width: 8px;
        height: 8px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin-right: 5px;
        display: inline-block;
        top: 5px
    }

    .services-list-wrapper .non-services .list-block-service li:last-child:befre {
        display: none
    }

    .services-list-wrapper .non-services .list-block-service li:first-child:after {
        display: none
    }

    .services-list-wrapper .non-services .list-block-service li:after {
        display: none
    }

    .list-block-service {
        overflow: hidden
    }

    .list-block-service ul li {
        display: block;
        position: relative;
        padding-left: 38px;
        padding-bottom: 17px;
        font-size: 16px
    }

    @media(min-width: 768px) {
        .list-block-service ul li {
            font-size:18px
        }
    }

    .list-block-service ul li:before {
        content: '';
        position: absolute;
        top: 6px;
        left: 0;
        width: 15px;
        height: 11px;
        background: url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/check_marck.png);
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        z-index: 1
    }

    .service-holder {
        overflow: hidden;
        position: relative
    }

    .service-holder .block {
        font-size: 14px;
        line-height: 1.6;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .service-holder .block {
            width:50%;
            float: left
        }
    }

    .service-holder .block.service-image {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        min-height: 350px;
        position: relative
    }

    @media(min-width: 768px) {
        .service-holder .block.service-image {
            position:absolute;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            min-height: 0
        }
    }

    .service-holder .block.service-info {
        overflow: hidden
    }

    .service-holder .block.service-info .text-service {
        max-width: 585px;
        margin: 0 auto;
        padding: 20px 15px
    }

    @media(min-width: 768px) {
        .service-holder .block.service-info .text-service {
            float:right;
            width: 100%;
            white-space: nowrap;
            padding: 0;
            padding-right: 20px
        }

        .service-holder .block.service-info .text-service:after {
            content: '';
            display: inline-block;
            vertical-align: middle;
            min-height: 550px
        }

        .service-holder .block.service-info .text-service .middle {
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
            padding: 20px 15px
        }
    }

    @media(min-width: 768px) {
        .service-holder:nth-child(even) .service-info {
            float:right
        }

        .service-holder:nth-child(even) .service-info .text-service {
            float: none;
            margin: 0
        }
    }

    @media(min-width: 768px) and (min-width:1024px) {
        .service-holder:nth-child(even) .service-info .text-service {
            padding-left:65px
        }
    }

    @media(min-width: 768px) {
        .service-holder:nth-child(even) .service-image {
            left:0
        }
    }

    .booking-block {
        padding: 70px 0;
        overflow: hidden;
        background: #ededeb;
        text-align: center
    }

    .location-block {
        padding: 101px 0
    }

    .location-block .heading-block {
        overflow: hidden;
        padding-bottom: 0
    }

    .location-block .heading-block .heading-text {
        margin-bottom: 55px
    }

    .location-block .loc_image {
        padding-bottom: 53px
    }

    .location-block .loc_image img {
        display: block;
        max-width: 100%;
        margin: auto
    }

    .location-block .holder {
        margin: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .location-block .holder .detail-info:first-child:after {
        display: none
    }

    .location-block .detail-info-holder {
        padding: 0;
        padding-bottom: 50px
    }

    .location_map {
        height: 300px;
        width: 100%;
        margin-top: 50px
    }

    .location_map iframe {
        width: 100%;
        height: 100%
    }

    .location-info-wrapper {
        overflow: hidden;
        padding-bottom: 46px;
        border-bottom: 1px solid #d0d0d0;
        margin-bottom: 54px;
        text-align: center
    }

    @media(min-width: 768px) {
        .location-info-wrapper {
            text-align:left
        }
    }

    .location-info-wrapper:last-child {
        border-bottom: 0;
        margin-bottom: 0
    }

    .location-info-wrapper .info-header:after {
        display: none
    }

    .location-info-wrapper .detail-info {
        display: block
    }

    @media(min-width: 768px) {
        .location-info-wrapper .detail-info {
            width:50%;
            display: inline-block;
            vertical-align: top;
            padding: 0 20px 20px
        }
    }

    @media(min-width: 1024px) {
        .location-info-wrapper .detail-info {
            width:25%;
            padding-bottom: 0;
            color: #5c5c5c;
            line-height: 30px
        }
    }

    .location-info-wrapper .detail-info a {
        display: inline-block;
        vertical-align: top;
        color: #5c5c5c;
        text-decoration: none;
        -webkit-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease
    }

    .location-info-wrapper .detail-info a:hover {
        color: #303030
    }

    .location-info-wrapper .detail-info .arrow-link {
        color: #377dff
    }

    .location-info-wrapper .detail-info .arrow-link .icon {
        color: #5c5c5c
    }

    .location-info-wrapper address {
        font-style: normal
    }

    .intrested-block {
        overflow: hidden;
        padding: 80px 0
    }

    @media(min-width: 768px) {
        .intrested-block {
            padding:100px 0
        }
    }

    .intrested-block .heading-block {
        max-width: 100%
    }

    @media(min-width: 1024px) {
        .intrested-block .heading-block .sub-para {
            font-size:18px
        }
    }

    .list-block {
        max-width: 1030px;
        margin: 0 auto
    }

    .list-block ul li {
        display: block;
        padding-bottom: 18px;
        position: relative;
        padding-left: 37px;
        font-size: 14px;
        position: relative
    }

    @media(min-width: 768px) {
        .list-block ul li {
            font-size:18px;
            padding-bottom: 23px
        }
    }

    .list-block ul li::before {
        content: '';
        position: absolute;
        top: 6px;
        left: 0;
        width: 8px;
        height: 8px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        display: inline-block;
        vertical-align: top;
        background: #c3c3c3;
        color: #c3c3c3;
        overflow: hidden;
        z-index: 1
    }

    .list-block ul li:last-child {
        padding-bottom: 0
    }

    .banner-booking .heading-block {
        padding: 0
    }

    .banner-booking .heading-text {
        margin-bottom: 30px
    }

    @media(min-width: 768px) {
        .banner-booking .heading-text {
            margin-bottom:50px
        }
    }

    .booking-form-block {
        padding: 30px 0;
        background: #ededeb
    }

    .booking-feature-holder {
        overflow: hidden;
        text-align: center;
        padding-top: 20px
    }

    @media(min-width: 768px) {
        .booking-feature-holder {
            margin:0 -15px;
            padding-top: 30px
        }
    }

    .booking-feature-holder .booking-feature {
        display: inline-block;
        vertical-align: top;
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0;
        padding: 0 15px 30px;
        width: 200px;
        max-width: 100%
    }

    @media(min-width: 768px) {
        .booking-feature-holder .booking-feature {
            width:20%;
            padding-bottom: 0
        }
    }

    .booking-feature-holder .booking-feature .icon {
        max-width: 80px;
        margin: 0 auto;
        height: auto;
        width: auto;
        white-space: nowrap;
        margin-bottom: 10px;
        overflow: hidden
    }

    @media(min-width: 480px) {
        .booking-feature-holder .booking-feature .icon {
            max-width:120px
        }

        .booking-feature-holder .booking-feature .icon:after {
            content: '';
            display: inline-block;
            vertical-align: middle;
            min-height: 78px
        }
    }

    .booking-feature-holder .booking-feature .icon img {
        display: inline-block;
        vertical-align: middle;
        white-space: normal;
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto
    }

    .booking-feature-holder .booking-feature .feature-header-text {
        font-size: 20px
    }

    .quote-banner {
        background: #ededeb
    }

    .unboxed-style .quote-banner {
        background: #377dff
    }

    .unboxed-style .quote-banner .heading-block {
        color: #fff
    }

    .unboxed-style .quote-banner .heading-block .heading-text {
        color: #fff
    }

    .quote-form-block {
        padding: 80px 0;
        text-align: center
    }

    .unboxed-style .quote-form-block {
        background: #ededeb
    }

    .quote-form-block .form-heading-block .heading {
        font-weight: 400;
        padding-bottom: 26px;
        display: block;
        margin-bottom: 30px;
        border-bottom: 1px solid #d7d7d7
    }

    @media(min-width: 1024px) {
        .quote-form-block .form-heading-block .heading {
            font-size:46px;
            padding-bottom: 46px;
            margin-bottom: 50px
        }
    }

    .booking-form-block {
        padding: 30px 0
    }

    .quote-section {
        background: #ededeb;
        padding-bottom: 40px
    }

    @media(min-width: 768px) {
        .quote-section {
            padding-bottom:80px
        }
    }

    .quote-form-section {
        overflow: hidden
    }

    .quote-form-section .validation_error {
        display: block;
        margin-bottom: 20px;
        padding: 10px 15px;
        border: 1px solid red;
        color: red;
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    .quote-form-section .instruction.validation_message,.quote-form-section .validation_message {
        display: none
    }

    .quote-form-section .gfield_error input,.quote-form-section .gfield_error textarea,.quote-form-section .gfield_error select {
        border-color: red
    }

    .quote-form-section .gfield_error input:placeholder,.quote-form-section .gfield_error textarea:placeholder,.quote-form-section .gfield_error select:placeholder {
        color: red
    }

    .quote-form-section .row-personal-info {
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px;
        margin: 0 -14px
    }

    .quote-form-section .row-personal-info li {
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .quote-form-section .row-personal-info li {
            width:50%;
            display: inline-block;
            vertical-align: top
        }
    }

    .quote-form-section .row-business-info {
        font-size: 0;
        line-height: 0;
        letter-spacing: -4px;
        margin: 0 -14px
    }

    .quote-form-section .row-business-info li {
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .quote-form-section .row-business-info li {
            width:50%;
            display: inline-block;
            vertical-align: top
        }
    }

    @media(min-width: 768px) {
        .quote-form-section .row-business-info li.business-inputfield {
            width:60%;
            padding-right: 0
        }
    }

    .quote-form-section .row-business-info li.business-inputfield input {
        -webkit-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px
    }

    @media(min-width: 768px) {
        .quote-form-section .row-business-info li.suite-input {
            width:15%;
            margin-left: -1px;
            padding-left: 0
        }
    }

    .quote-form-section .row-business-info li.suite-input input {
        -webkit-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
        padding-left: 10px;
        padding-right: 10px
    }

    @media(min-width: 768px) {
        .quote-form-section .row-business-info li.zip-inputfield {
            width:25%
        }
    }

    .quote-form-section .gform_footer {
        text-align: center
    }

    .quote-form-section .gform_footer .button {
        outline: 0;
        display: inline-block;
        vertical-align: middle;
        padding: 12px 36px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 700;
        border: 0;
        line-height: 1.3;
        color: #fff;
        text-decoration: none;
        background: #f6921e;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        border-bottom: 4px solid #d87809;
        min-width: 200px
    }

    .quote-form-section .gform_footer .button:hover {
        background: #f1860a;
        border-bottom-color: #c06b08
    }

    .quote-form-section .gform_footer .gform_ajax_spinner {
        display: block;
        margin: 10px auto 0
    }

    @media(min-width: 768px) {
        .quote-form-section .gform_footer .gform_ajax_spinner {
            margin:0;
            margin-left: 10px;
            display: inline-block;
            vertical-align: middle
        }
    }

    .review-banner {
        padding: 72px 0
    }

    .review-banner .heading-block {
        padding: 0
    }

    .review-banner .heading-block .info {
        padding-bottom: 45px
    }

    .live-rating-counter {
        max-width: 300px;
        margin: 0 auto;
        text-align: left
    }

    .live-rating-counter .list-counter {
        padding-bottom: 10px
    }

    .live-rating-counter .list-counter:last-child {
        padding-bottom: 0
    }

    .live-rating-counter .col {
        display: inline-block;
        vertical-align: middle;
        font-size: 18px;
        line-height: 1.3;
        letter-spacing: 0;
        padding: 0 5px
    }

    .live-rating-counter .col.stars-rating {
        overflow: hidden
    }

    .live-rating-counter .col.stars-rating li {
        width: 22px;
        height: 20px
    }

    .live-rating-counter .col.stars-rating li .star-holder {
        width: 22px;
        height: 100%
    }

    .live-reviews {
        background: #ededeb;
        padding: 31px 0
    }

    .live-reviews .reviews-holder {
        white-space: normal
    }

    .live-reviews .reviews-holder .review-wrap {
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #ededeb;
        padding: 25px 30px;
        text-align: center
    }

    @media(min-width: 1024px) {
        .live-reviews .reviews-holder .review-wrap {
            text-align:left;
            padding: 30px 37px
        }
    }

    .live-reviews .reviews-holder .review-wrap:last-child {
        border: 0
    }

    .live-reviews .button-wrapper {
        text-align: center
    }

    .live-reviews .booking-form {
        padding: 103px 0;
        overflow: hidden;
        text-align: center
    }

    .live-reviews .booking-form .heading-text {
        margin-bottom: 30px
    }

    .live-reviews .booking-form .sub-para {
        padding-bottom: 0
    }

    .live-reviews .booking-form .sub-para p {
        margin-bottom: 0
    }

    .live-reviews .review {
        padding: 0;
        background: 0 0
    }

    .live-reviews .review .user-profile {
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .live-reviews .review .user-profile {
            width:30%;
            display: inline-block;
            vertical-align: middle;
            text-align: left
        }
    }

    .live-reviews .review .user-profile .col-profile-info {
        font-size: 14px;
        color: #d7d7d7
    }

    @media(min-width: 768px) {
        .live-reviews .review .user-profile .col-profile-info {
            display:inline-block;
            vertical-align: middle
        }
    }

    @media(min-width: 1024px) {
        .live-reviews .review .user-profile .col-profile-info {
            font-size:16px
        }
    }

    .live-reviews .review .user-profile .col-profile-info.profile-pic-large {
        max-width: 86px;
        max-height: 86px;
        margin: 0 auto;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        overflow: hidden;
        margin-bottom: 15px
    }

    @media(min-width: 768px) {
        .live-reviews .review .user-profile .col-profile-info.profile-pic-large {
            margin-bottom:0;
            margin-right: 8px
        }
    }

    @media(min-width: 1024px) {
        .live-reviews .review .user-profile .col-profile-info.profile-pic-large {
            margin-right:15px;
            max-width: 116px;
            max-height: 116px
        }
    }

    .live-reviews .review .user-profile .col-profile-info.profile-pic-large a {
        display: block
    }

    .live-reviews .review .user-profile .col-profile-info .cleaner-name {
        display: block;
        text-decoration: none;
        color: #bfbfbf;
        -webkit-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .live-reviews .review .user-profile .col-profile-info .cleaner-name .name-cleaner {
        display: block;
        color: #303030
    }

    .live-reviews .review .review-info {
        max-width: 250px;
        margin: 0 auto;
        border-bottom: 0
    }

    @media(min-width: 768px) {
        .live-reviews .review .review-info {
            margin:0
        }
    }

    .live-reviews .review-main {
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .live-reviews .review-main {
            width:70%;
            display: inline-block;
            vertical-align: middle;
            border-left: 1px solid #ededeb;
            padding-left: 57px;
            text-align: left
        }
    }

    .live-reviews .review-main .review-info {
        min-height: 43px;
        padding-bottom: 10px
    }

    .live-reviews .review-main .review-footer {
        overflow: hidden;
        text-align: center
    }

    .live-reviews .review-main .review-footer .ratings {
        padding-bottom: 20px
    }

    @media(min-width: 768px) {
        .live-reviews .review-main .review-footer .ratings {
            padding-bottom:0;
            float: left
        }
    }

    .live-reviews .review-main .review-footer .cleaned-room {
        width: 100%;
        text-align: center;
        float: none
    }

    .live-reviews .review-main .review-footer .cleaned-room span {
        display: inline-block;
        vertical-align: middle
    }

    @media(min-width: 768px) {
        .live-reviews .review-main .review-footer .cleaned-room {
            width:50%;
            float: right;
            text-align: right
        }
    }

    .contact-page-block {
        background: #ededeb;
        padding: 88px 0
    }

    .contact-page-block .info-header {
        display: block;
        font-size: 13px;
        color: #303030;
        font-weight: 700;
        position: relative;
        padding-bottom: 20px;
        letter-spacing: .2em
    }

    .contact-page-block .contact-info {
        overflow: hidden;
        margin: 0 -10px
    }

    .contact-page-block .contact-info .detail-info {
        width: 50%;
        display: inline-block;
        vertical-align: top;
        padding: 0 10px;
        padding-bottom: 33px;
        color: #5c5c5c;
        font-size: 16px;
        letter-spacing: 0;
        word-break: break-word
    }

    @media(min-width: 768px) {
        .contact-page-block .contact-info .detail-info {
            display:block;
            width: 100%
        }
    }

    .contact-page-block .contact-info .detail-info .info-header {
        padding-bottom: 6px
    }

    .contact-page-block .contact-info .detail-info .info-header:after {
        display: none
    }

    .contact-page-block .contact-info .detail-info li {
        padding-bottom: 0;
        line-height: 1.8;
        letter-spacing: 0
    }

    .contact-page-block .contact-info .detail-info li:last-child {
        padding-bottom: 0
    }

    .contact-page-block .contact-info .detail-info li a {
        display: inline-block;
        vertical-align: top;
        color: #5c5c5c;
        text-decoration: none;
        -webkit-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease
    }

    .contact-page-block .contact-info .detail-info li a:hover {
        color: #303030
    }

    .contact-page-block .contact-info .detail-info address {
        font-style: normal
    }

    .contact-page-block .contact-info .detail-info .arrow-link {
        color: #377dff
    }

    .contact-page-block .contact-info .detail-info .arrow-link .icon {
        color: #5c5c5c
    }

    .contact-page-block .validation_error {
        display: block;
        margin-bottom: 20px;
        padding: 10px 15px;
        border: 1px solid red;
        color: red;
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    .contact-page-block .validation_message {
        margin: -10px 0 10px;
        color: red;
        display: none
    }

    .contact-info-holder .col {
        font-size: 14px;
        line-height: 1.3;
        letter-spacing: 0
    }

    @media(min-width: 768px) {
        .contact-info-holder .col {
            display:inline-block;
            vertical-align: top;
            padding: 0 10px;
            width: 34%
        }

        .contact-info-holder .col:first-child {
            padding-left: 0
        }

        .contact-info-holder .col:last-child {
            padding-right: 0
        }

        .contact-info-holder .col.form-contact {
            width: 66%
        }
    }

    .contact-info-holder .gform_wrapper .gfield_required {
        display: none
    }

    .contact-info-holder .gform_wrapper .validation_error {
        padding-bottom: 10px
    }

    .contact-info-holder .gform_wrapper .gform_footer {
        width: 100%
    }

    .contact-info-holder .gform_wrapper .gform_footer img {
        display: none!important
    }

    .contact-info-holder .gform_wrapper .gform_footer .gform_button {
        width: 100%;
        border: 0;
        color: #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        padding: 16px;
        background: #f6921e;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        outline: 0!important;
        border-bottom: 4px solid #e77c00;
        outline: 0!important
    }

    .contact-info-holder .gform_wrapper .gform_footer .gform_button:hover {
        background: #e77c00
    }

    .contact-form,.gform_body {
        overflow: hidden
    }

    .contact-form ul,.gform_body ul {
        margin: 0 -14px
    }

    .contact-form ul li,.gform_body ul li {
        display: block;
        padding: 0 14px
    }

    @media(min-width: 768px) {
        .contact-form ul li.half-field,.gform_body ul li.half-field {
            width:50%;
            float: left
        }
    }

    .contact-form .input-holder,.gform_body .input-holder {
        overflow: hidden
    }

    @media(min-width: 768px) {
        .contact-form .input-holder .inputfield,.gform_body .input-holder .inputfield {
            width:50%;
            display: inline-block;
            vertical-align: top;
            padding-left: 14px;
            padding-right: 14px
        }

        .contact-form .input-holder .inputfield:first-child,.gform_body .input-holder .inputfield:first-child {
            padding-left: 0
        }

        .contact-form .input-holder .inputfield:last-child,.gform_body .input-holder .inputfield:last-child {
            padding-right: 0
        }
    }

    .contact-form .input-field,.contact-form .ginput_container,.gform_body .input-field,.gform_body .ginput_container {
        font-size: 16px;
        line-height: 1.3;
        letter-spacing: 0;
        padding-bottom: 0
    }

    .contact-form input,.contact-form textarea,.contact-form select,.gform_body input,.gform_body textarea,.gform_body select {
        width: 100%;
        outline: 0;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        background: #fff;
        padding: 10px 22px;
        border: 1px solid #d7d7d7;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
        overflow: hidden;
        font-size: 16px;
        height: 48px
    }

    .contact-form input:focus,.contact-form textarea:focus,.contact-form select:focus,.gform_body input:focus,.gform_body textarea:focus,.gform_body select:focus {
        border-color: #a4a4a4
    }

    .contact-form textarea,.gform_body textarea {
        min-height: 230px
    }

    .contact-form select,.gform_body select {
        height: 48px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        background: transparent url(//cleanzen.com/wp-content/themes/cleanzen/assets/images/arrow-down.svg) 100% 50% no-repeat;
        -webkit-background-size: 30px 30px;
        background-size: 30px
    }

    .contact-form select::-ms-expand,.gform_body select::-ms-expand {
        display: none
    }

    .contact-form .button-primary,.gform_body .button-primary {
        width: 100%;
        border: 0;
        color: #fff;
        -webkit-border-radius: 7px;
        border-radius: 7px;
        font-size: 14px;
        padding-top: 21px;
        padding-bottom: 21px;
        background: #377dff
    }

    .contact-form .button-primary:hover,.gform_body .button-primary:hover {
        background: #0052ea
    }

    .contact-map {
        width: 100%;
        min-height: 598px;
        position: relative;
        font-size: 18px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .contact-map .location-text {
        margin-bottom: 15px
    }

    .contact-map iframe {
        width: 100%!important
    }

    .single-post .header .header_top,.blog .header .header_top,.category .header .header_top {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .single-post .header .header_top .menu-activator,.blog .header .header_top .menu-activator,.category .header .header_top .menu-activator {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1
    }

    .single-post .header .header_top .header-content,.blog .header .header_top .header-content,.category .header .header_top .header-content {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1
    }

    .header.header_blog .header-content {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .header.header_blog .header-content .menus_wrap {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .logo_blog {
        width: 100%;
        max-width: 299px
    }

    .blog_nav {
        margin-top: 50px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .blog_nav ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 0;
        margin: 0
    }

    .blog_nav ul li {
        list-style: none;
        margin-right: 50px;
        position: relative;
        padding-bottom: 16px
    }

    .blog_nav ul li a {
        text-decoration: none;
        color: #303030;
        font-size: 14px;
        text-transform: uppercase;
        position: relative
    }

    .blog_nav ul li a:before {
        content: "";
        display: block;
        width: 100%;
        height: 2px;
        background: #377dff;
        position: absolute;
        bottom: -33px;
        left: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .blog_nav ul li a:hover:before {
        opacity: 1
    }

    .blog_nav ul li.current-cat a:before {
        opacity: 1
    }

    .blog_nav ul li.active a:before {
        opacity: 1
    }

    .search_block {
        position: relative
    }

    .form_search {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: absolute;
        right: 0
    }

    .form_search .search_btn .fa {
        font-size: 22px;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .form_search {
        position: absolute;
        margin: auto;
        top: -15px;
        right: 0;
        bottom: 0;
        width: 300px;
        height: 40px
    }

    .form_search .search {
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        width: 40px;
        height: 40px;
        background: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
        z-index: 4
    }

    .form_search .search:hover {
        cursor: pointer
    }

    .form_search .search::before {
        content: "";
        position: absolute;
        margin: auto;
        top: 16px;
        right: 0;
        bottom: 0;
        left: 11px;
        width: 12px;
        height: 2px;
        background: #303030;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s
    }

    .form_search .search::after {
        content: "";
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: -5px;
        width: 14px;
        height: 14px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        border: 2px solid #303030;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s
    }

    .form_search input {
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        width: 40px;
        height: 40px;
        outline: 0;
        border: 0;
        background: #ededeb;
        color: #fff;
        padding: 0;
        -webkit-border-radius: 30px;
        border-radius: 30px;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
        opacity: 0;
        z-index: 5;
        font-weight: bolder;
        letter-spacing: .1em;
        color: #5c5c5c
    }

    .form_search input:hover {
        cursor: pointer
    }

    .form_search input:focus {
        width: 300px;
        opacity: 1;
        cursor: text;
        padding: 0 40px 0 20px
    }

    .form_search input:focus~.search {
        background: #ededeb;
        z-index: 6
    }

    .form_search input:focus~.search::before {
        top: 0;
        left: 0;
        width: 25px;
        background: #303030
    }

    .form_search input:focus~.search::after {
        top: 0;
        left: 0;
        width: 25px;
        height: 2px;
        border: 0;
        background: #303030;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .form_search input::-webkit-input-placeholder {
        color: #5c5c5c;
        opacity: .9;
        font-weight: bolder;
        font-family: brownstd,sans-serif
    }

    .form_search input:-ms-input-placeholder {
        color: #5c5c5c;
        opacity: .9;
        font-weight: bolder;
        font-family: brownstd,sans-serif
    }

    .form_search input::-ms-input-placeholder {
        color: #5c5c5c;
        opacity: .9;
        font-weight: bolder;
        font-family: brownstd,sans-serif
    }

    .form_search input::placeholder {
        color: #5c5c5c;
        opacity: .9;
        font-weight: bolder;
        font-family: brownstd,sans-serif
    }

    .tcon {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 0;
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        height: 40px;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        width: 40px;
        background: 0 0;
        outline: 0;
        -webkit-tap-highlight-color: transparent;
        -webkit-tap-highlight-color: transparent
    }

    .tcon>* {
        display: block
    }

    .tcon:hover,.tcon:focus {
        outline: 0
    }

    .tcon::-moz-focus-inner {
        border: 0
    }

    .tcon-menu__lines {
        display: inline-block;
        height: 5.71429px;
        width: 40px;
        -webkit-border-radius: 2.85714px;
        border-radius: 2.85714px;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        background: #000;
        position: relative
    }

    .tcon-menu__lines::before,.tcon-menu__lines::after {
        display: inline-block;
        height: 5.71429px;
        width: 40px;
        -webkit-border-radius: 2.85714px;
        border-radius: 2.85714px;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        background: #000;
        content: '';
        position: absolute;
        left: 0;
        -webkit-transform-origin: 2.85714px center;
        -ms-transform-origin: 2.85714px center;
        transform-origin: 2.85714px center;
        width: 100%
    }

    .tcon-menu__lines::before {
        top: 10px
    }

    .tcon-menu__lines::after {
        top: -10px
    }

    .tcon-transform .tcon-menu__lines {
        -webkit-transform: scale3d(.8,.8,.8);
        transform: scale3d(.8,.8,.8)
    }

    .tcon-menu--xbutterfly {
        width: auto
    }

    .tcon-menu--xbutterfly .tcon-menu__lines::before,.tcon-menu--xbutterfly .tcon-menu__lines::after {
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-transition: top .3s .6s ease,-webkit-transform .3s ease;
        transition: top .3s .6s ease,-webkit-transform .3s ease;
        -o-transition: top .3s .6s ease,transform .3s ease;
        transition: top .3s .6s ease,transform .3s ease;
        transition: top .3s .6s ease,transform .3s ease,-webkit-transform .3s ease
    }

    .tcon-menu--xbutterfly.tcon-transform .tcon-menu__lines {
        background: 0 0
    }

    .tcon-menu--xbutterfly.tcon-transform .tcon-menu__lines::before,.tcon-menu--xbutterfly.tcon-transform .tcon-menu__lines::after {
        top: 0;
        -webkit-transition: top .3s ease,-webkit-transform .3s .5s ease;
        transition: top .3s ease,-webkit-transform .3s .5s ease;
        -o-transition: top .3s ease,transform .3s .5s ease;
        transition: top .3s ease,transform .3s .5s ease;
        transition: top .3s ease,transform .3s .5s ease,-webkit-transform .3s .5s ease;
        width: 40px
    }

    .tcon-menu--xbutterfly.tcon-transform .tcon-menu__lines::before {
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg)
    }

    .tcon-menu--xbutterfly.tcon-transform .tcon-menu__lines::after {
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg)
    }

    .tcon-visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .tcon-visuallyhidden:active,.tcon-visuallyhidden:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto
    }

    .tcon-search__item {
        display: inline-block;
        height: 30px;
        width: 30px;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        background: 0 0;
        position: relative;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .tcon-search__item::before,.tcon-search__item::after {
        display: inline-block;
        height: 30px;
        width: 30px;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        background: 0 0;
        content: '';
        position: absolute;
        width: 100%;
        top: 0;
        bottom: 0;
        margin: auto
    }

    .tcon-search__item::before {
        height: 4px;
        left: 0;
        background: #000;
        -webkit-border-radius: 2.85714px;
        border-radius: 2.85714px
    }

    .tcon-search__item::after {
        right: 0;
        background: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 12.00012px;
        height: 12.00012px;
        border: 2px solid #000;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .tcon-search--xcross.tcon-transform {
        -webkit-transform: scale3d(.8,.8,.8);
        transform: scale3d(.8,.8,.8)
    }

    .tcon-search--xcross.tcon-transform .tcon-search__item::before,.tcon-search--xcross.tcon-transform .tcon-search__item::after {
        -webkit-border-radius: 2.85714px;
        border-radius: 2.85714px;
        background: #000
    }

    .tcon-search--xcross.tcon-transform .tcon-search__item::after {
        height: 4px;
        width: 100%;
        top: 0;
        right: 0;
        border: 0;
        -webkit-transform: rotate3d(0,0,1,90deg);
        transform: rotate3d(0,0,1,90deg)
    }

    header.page-header.header_blog {
        padding-bottom: 8px
    }

    .blog_page {
        background: #ededeb;
        padding-top: 50px;
        padding-bottom: 100px;
        position: relative
    }

    .slider_post {
        position: relative;
        margin-bottom: 30px
    }

    .slider_post_wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        background: #fff
    }

    .slider_post_wrap .item {
        width: 50%
    }

    .slider_post_wrap .item .image {
        display: block;
        width: 100%;
        height: 100%
    }

    .slider_post_wrap .item .image img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
        height: 100%
    }

    .slider_post_wrap .item .content {
        padding: 40px
    }

    .slider_post_wrap .item .content .top_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding-bottom: 20px
    }

    .slider_post_wrap .item .content .cat_name {
        font-size: 13px;
        text-transform: uppercase;
        color: #303030
    }

    .slider_post_wrap .item .content .cat_name a {
        font-size: 14px;
        text-transform: uppercase;
        color: #a2a2a2;
        text-decoration: none;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .slider_post_wrap .item .content .cat_name a:hover {
        color: #377dff
    }

    .slider_post_wrap .item .content .date {
        font-size: 13px;
        color: #303030
    }

    .slider_post_wrap .item .content .text {
        padding-bottom: 20px
    }

    .slider_post_wrap .item .content .bottom_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .slider_post_wrap .item .content .bottom_block .btn a {
        font-size: 15px;
        font-weight: 700;
        text-align: center;
        background: #377dff;
        width: 120px;
        height: 40px;
        line-height: 41px;
        display: block;
        color: #fff;
        text-decoration: none;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .slider_post_wrap .item .content .bottom_block .btn a:hover {
        background: rgba(55,125,255,.7)
    }

    .slider_post_wrap .item .content .bottom_block .post_info {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 12px;
        color: #b8b8b8
    }

    .slider_post_wrap .item .content .bottom_block .post_info img {
        margin-right: 5px
    }

    .slider_post_wrap .item .content .bottom_block .post_info p {
        color: #000;
        font-size: 13px
    }

    .slider_post_wrap .item .content .bottom_block .post_info>div {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 15px
    }

    .slider_post_wrap .item .title {
        padding-bottom: 20px
    }

    .slider_post_wrap .item .title a {
        font-size: 30px;
        color: #303030;
        line-height: 36px;
        font-weight: 400;
        text-decoration: none
    }

    .btn_slider {
        position: absolute;
        width: 40px;
        height: 40px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        top: 0;
        bottom: 0;
        margin: auto
    }

    .btn_slider i {
        font-size: 40px;
        color: #b8b8b8;
        cursor: pointer;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .btn_slider:hover i {
        color: #000
    }

    .btn_slider.prev {
        left: -40px
    }

    .btn_slider.next {
        right: -40px
    }

    .load_more_wrap .btn.loadMoreBtn {
        font-size: 17px;
        font-weight: 700;
        text-align: center;
        background: #fff;
        color: #377dff;
        width: 130px;
        height: 40px;
        line-height: 41px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        margin: auto;
        margin-top: 50px
    }

    .btn.loadMoreBtn:hover {
        background: #377dff;
        color: #fff
    }

    .inner_content {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .resent_post_wrap {
        width: 69%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .blog_aside {
        width: 29%
    }

    .resent_post {
        width: 48%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        background: #fff;
        margin-bottom: 30px;
        position: relative
    }

    .resent_post .image {
        display: block;
        width: 100%;
        height: 100%
    }

    .resent_post .image img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
        height: 100%;
        max-height: 220px
    }

    .resent_post .content {
        padding: 30px;
        height: 100%
    }

    .resent_post .content .top_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding-bottom: 20px
    }

    .resent_post .content .cat_name {
        font-size: 13px;
        text-transform: uppercase;
        color: #303030
    }

    .resent_post .content .cat_name a {
        font-size: 13px;
        text-transform: uppercase;
        color: #303030;
        text-decoration: none;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .resent_post .content .cat_name a:hover {
        color: #377dff
    }

    .resent_post .content .date {
        font-size: 13px;
        color: #303030
    }

    .resent_post .content .text {
        font-size: 16px;
        line-height: 25px;
        padding-bottom: 60px;
        color: #5c5c5c
    }

    .resent_post .content .bottom_block {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: absolute;
        bottom: 30px;
        width: 100%;
        left: 0;
        right: 0;
        padding: 0 30px
    }

    .resent_post .content .bottom_block .btn a {
        font-size: 15px;
        font-weight: 700;
        text-align: center;
        background: #377dff;
        width: 120px;
        height: 40px;
        line-height: 41px;
        display: block;
        color: #fff;
        text-decoration: none;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .resent_post .content .bottom_block .btn a:hover {
        background: rgba(55,125,255,.7)
    }

    .resent_post .content .bottom_block .post_info {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 13px;
        color: #000
    }

    .resent_post .content .bottom_block .post_info img {
        margin-right: 5px
    }

    .resent_post .content .bottom_block .post_info p {
        font-size: 13px;
        color: #000
    }

    .resent_post .content .bottom_block .post_info>div {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 15px
    }

    .resent_post .content .title {
        padding-bottom: 15px
    }

    .resent_post .content .title h1 {
        line-height: 24px
    }

    .resent_post .content .title a {
        font-size: 20px;
        color: #303030;
        line-height: 24px;
        font-weight: 400;
        text-decoration: none
    }

    .resent_post_wrap figure {
        max-width: 100%;
        margin: 0
    }

    .resent_post_wrap .wp-pagenavi {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .resent_post_wrap .wp-pagenavi .pages {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1;
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end;
        margin-left: auto;
        padding: 6px 12px;
        color: #303030;
        font-size: 13px;
        background: #fff;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1);
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
        border: 0;
        -webkit-border-radius: 2px;
        border-radius: 2px
    }

    .resent_post_wrap .wp-pagenavi a {
        padding: 6px 12px;
        color: #303030;
        font-size: 13px;
        background: #fff;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1);
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
        border: 0;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        -webkit-border-radius: 2px;
        border-radius: 2px
    }

    .resent_post_wrap .wp-pagenavi a:hover {
        color: #fff;
        background: rgba(55,125,255,.7)
    }

    .resent_post_wrap .wp-pagenavi .current {
        padding: 6px 12px;
        color: #676767;
        font-size: 13px;
        background: #377dff;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1);
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
        border: 0;
        color: #fff;
        -webkit-border-radius: 2px;
        border-radius: 2px
    }

    .resent_post_wrap .apss-social-share {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .resent_post_wrap .apss-social-share .apss-single-icon {
        margin-left: 5px
    }

    .resent_post_wrap .apss-social-share .apss-single-icon a {
        min-height: auto;
        float: none;
        margin: 0
    }

    .resent_post_wrap .apss-social-share .apss-single-icon .apss-icon-block {
        width: 20px;
        height: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        min-width: auto
    }

    .resent_post_wrap .apss-social-share .apss-single-icon .apss-icon-block .fa {
        font-size: 12px;
        padding: 0;
        min-width: auto;
        font-family: FontAwesome;
        font-weight: 400
    }

    .social_page {
        position: fixed;
        left: 0;
        z-index: 3
    }

    .social_page .apss-social-share {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .social_page .apss-social-share .apss-single-icon {
        margin-left: 0
    }

    .social_page .apss-social-share .apss-single-icon a {
        min-height: auto;
        float: none;
        margin: 0
    }

    .social_page .apss-social-share .apss-single-icon a:hover .apss-icon-block::after {
        left: 0;
        top: 0;
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .social_page .apss-social-share .apss-single-icon .apss-icon-block {
        width: 50px;
        height: 50px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        min-width: auto;
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .social_page .apss-social-share .apss-single-icon .apss-icon-block .fa {
        font-size: 20px;
        padding: 0;
        font-family: FontAwesome;
        min-width: auto;
        font-weight: 400
    }

    .blog_aside {
        width: 29%
    }

    .aside_item {
        display: block;
        width: 100%;
        margin-bottom: 30px
    }

    .aside_item:last-child {
        margin-bottom: 0
    }

    .aside_form_wrap {
        background: #051635;
        padding: 50px 30px;
        position: relative;
        width: 100%
    }

    .aside_form_wrap .image {
        display: block;
        text-align: center;
        padding-bottom: 30px
    }

    .aside_form_wrap .title {
        text-align: center;
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        line-height: 25px
    }

    .aside_form_wrap .title p {
        color: inherit
    }

    .aside_form_wrap .sub_title {
        font-size: 13px;
        color: #979eaa;
        line-height: 25px;
        text-align: center
    }

    .aside_form_wrap .sub_title p {
        color: inherit
    }

    .aside_form_wrap .subscrip {
        padding-top: 10px;
        text-align: center;
        font-size: 13px;
        color: #979eaa
    }

    .aside_form_wrap .subscrip p {
        color: inherit
    }

    .facebook_widjet {
        background: #fff;
        padding: 30px
    }

    .facebook_widjet .fb-page {
        width: 100%
    }

    .recent_widjet {
        background: #fff;
        padding: 0 30px 30px
    }

    .recent_widjet .title {
        padding-bottom: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-bottom: 20px
    }

    .recent_widjet .title h3 {
        color: #303030;
        font-size: 18px
    }

    .recent_widjet .title i {
        color: #c90404;
        font-size: 23px;
        margin-left: 10px
    }

    .recent_widjet .recent_list ul {
        margin: 0;
        padding: 0
    }

    .recent_widjet .recent_list ul li {
        list-style: none;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 15px
    }

    .recent_widjet .recent_list ul li:before {
        content: "";
        position: absolute;
        bottom: 0;
        width: 50%;
        height: 1px;
        background: #ededeb;
        left: 0
    }

    .recent_widjet .recent_list ul li:last-child:before {
        display: none
    }

    .recent_widjet .recent_list ul li a {
        text-decoration: none;
        font-size: 17px;
        color: #303030;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        line-height: 25px;
        display: block
    }

    .recent_widjet .recent_list ul li a:hover {
        color: #377dff
    }

    .single_post {
        display: block;
        width: 100%;
        background: #fff;
        padding: 40px
    }

    .single_post .title {
        padding-bottom: 20px
    }

    .single_post .title h1 {
        font-size: 36px;
        color: #303030;
        font-weight: 400;
        font-family: brownstd;
        line-height: 40px
    }

    .single_post .post_info {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding-bottom: 20px
    }

    .single_post .post_info .info {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .single_post .post_info .info>div {
        padding-right: 20px
    }

    .single_post .post_info .info>div:last-child {
        padding-right: 0
    }

    .single_post .post_info .author p {
        font-size: 12px;
        color: #b8b8b8;
        display: block
    }

    .single_post .post_info .author p span {
        color: #377dff;
        text-decoration: none
    }

    .single_post .post_info .info_comment {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .single_post .post_info .info_comment>div {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-right: 15px
    }

    .single_post .post_info .info_comment>div img {
        margin-right: 10px
    }

    .single_post .post_info .info_comment>div:last-child {
        padding-right: 0
    }

    .single_post .post_info .info_comment p {
        font-size: 12px;
        color: #b8b8b8
    }

    .single_post .post_info .link_comment a {
        text-decoration: none;
        font-size: 13px;
        color: #737373
    }

    .single_post .post_info .link_comment a:hover {
        text-decoration: underline
    }

    .single_post .social ul {
        padding: 0;
        margin: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .single_post .social ul li {
        list-style: none;
        padding-left: 5px
    }

    .single_post .social ul li a {
        text-decoration: none
    }

    .single_post .social ul li a i {
        width: 20px;
        height: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 12px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        color: #fff;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .single_post .social ul li a i.fa-envelope-o {
        background: #669c41
    }

    .single_post .social ul li a i.fa-facebook {
        background: #3c5b9b
    }

    .single_post .social ul li a i.fa-linkedin {
        background: #0173b2
    }

    .single_post .social ul li a i.fa-pinterest-p {
        background: #cb2128
    }

    .single_post .social ul li a i.fa-twitter {
        background: #2daae1
    }

    .single_post .social ul li a:hover i {
        background: #051635
    }

    .single_post .single_post_inner .image {
        padding-bottom: 40px;
        width: 100%;
        display: block;
        position: relative
    }

    .single_post .single_post_inner .image img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%
    }

    .single_post .single_post_inner .content p {
        line-height: 30px
    }

    #disqus_thread,#comments_block {
        width: 100%
    }

    #comments_block {
        background: #fff;
        padding: 40px
    }

    .resent_post_wrap .form {
        margin-top: 50px
    }

    .resent_post_wrap .form .gform_confirmation_message {
        color: #fff;
        text-align: center;
        font-size: 28px
    }

    .resent_post_wrap .form form {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: relative;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .resent_post_wrap .form form .validation_error {
        width: 100%;
        display: block;
        position: relative;
        color: red;
        font-size: 12px;
        top: 0;
        padding-bottom: 15px
    }

    .resent_post_wrap .form form .gform_body {
        width: 68%
    }

    .resent_post_wrap .form form .gform_footer {
        width: 28%
    }

    .resent_post_wrap .form form .gform_footer input[type=submit] {
        background: #377dff;
        font-size: 17px;
        color: #fff;
        font-weight: 700;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        display: block;
        width: 100%;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 54px;
        -webkit-border-radius: 3px;
        border-radius: 3px
    }

    .resent_post_wrap .form form .gform_footer input[type=submit]:hover {
        background: rgba(55,125,255,.7)
    }

    .resent_post_wrap .form form ul {
        margin: 0;
        display: block
    }

    .resent_post_wrap .form form ul li {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        padding: 0
    }

    .resent_post_wrap .form form ul li .validation_message {
        color: red;
        font-size: 12px;
        top: -12px
    }

    .resent_post_wrap .form form ul li .gfield_label {
        display: none
    }

    .resent_post_wrap .form form ul li input {
        display: block;
        width: 100%;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 54px;
        -webkit-border-radius: 3px;
        border-radius: 3px
    }

    .resent_post_wrap .form form ul li input[type=text] {
        font-size: 17px;
        color: #949494;
        padding: 0 15px;
        border-bottom: 2px solid #fff;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .resent_post_wrap .form form ul li input[type=text]:focus {
        border-bottom-color: #377dff
    }

    .resent_post_wrap .form form ul li.gfield_error input {
        border-bottom-color: red
    }

    .newsleter_wrap {
        width: 100%;
        margin: 40px 0;
        background: #051635;
        padding: 50px 30px
    }

    .newsleter_wrap .aside_form_wrap {
        position: relative;
        max-width: 570px;
        margin: auto;
        padding: 0
    }

    .newsleter_wrap .aside_form_wrap .title {
        font-size: 24px
    }

    .newsleter_wrap .aside_form_wrap .sub_title {
        font-size: 16px
    }

    .newsleter_wrap .aside_form_wrap .form {
        margin-top: 20px
    }

    .newsleter_wrap .aside_form_wrap .subscrip {
        font-size: 16px;
        padding-top: 30px
    }

    .blog_aside .aside_form_wrap .form {
        margin-top: 50px
    }

    .blog_aside .aside_form_wrap .form .gform_confirmation_message {
        color: #fff;
        text-align: center;
        font-size: 28px
    }

    .blog_aside .aside_form_wrap .form form {
        width: 100%;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: relative;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .blog_aside .aside_form_wrap .form form .validation_error {
        width: 100%;
        display: block;
        position: relative;
        color: red;
        font-size: 12px;
        top: 0;
        padding-bottom: 15px
    }

    .blog_aside .aside_form_wrap .form form .gform_body {
        width: 100%
    }

    .blog_aside .aside_form_wrap .form form .gform_footer {
        width: 100%
    }

    .blog_aside .aside_form_wrap .form form .gform_footer input[type=submit] {
        background: #377dff;
        font-size: 17px;
        color: #fff;
        font-weight: 700;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        display: block;
        width: 100%;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 54px;
        -webkit-border-radius: 3px;
        border-radius: 3px
    }

    .blog_aside .aside_form_wrap .form form .gform_footer input[type=submit]:hover {
        background: rgba(55,125,255,.7)
    }

    .blog_aside .aside_form_wrap .form form ul {
        margin: 0;
        display: block
    }

    .blog_aside .aside_form_wrap .form form ul li {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        padding: 0
    }

    .blog_aside .aside_form_wrap .form form ul li .validation_message {
        color: red;
        font-size: 12px;
        top: -12px
    }

    .blog_aside .aside_form_wrap .form form ul li .gfield_label {
        display: none
    }

    .blog_aside .aside_form_wrap .form form ul li input {
        display: block;
        width: 100%;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 54px;
        -webkit-border-radius: 3px;
        border-radius: 3px
    }

    .blog_aside .aside_form_wrap .form form ul li input[type=text] {
        font-size: 17px;
        color: #949494;
        padding: 0 15px;
        border-bottom: 2px solid #fff;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .blog_aside .aside_form_wrap .form form ul li input[type=text]:focus {
        border-bottom-color: #377dff
    }

    .blog_aside .aside_form_wrap .form form ul li.gfield_error input {
        border-bottom-color: red
    }

    .posts_navigation {
        display: block;
        width: 100%;
        padding-bottom: 25px
    }

    .posts_navigation .nav-links {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .posts_navigation .nav-links a {
        color: #377dff;
        font-size: 16px;
        text-decoration: none;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .posts_navigation .nav-links a:hover {
        color: rgba(55,125,255,.7)
    }

    .comment_policy {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        background: #dbdbdb;
        padding: 20px 40px 20px 0;
        margin: 20px 0;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .comment_policy .image_item {
        width: 150px;
        text-align: center
    }

    .comment_policy .policy_info .title {
        font-weight: 700;
        padding-bottom: 5px
    }

    .comment_policy .policy_info .text {
        color: #949494
    }

    .date_single_news {
        display: block;
        width: 100%;
        background: #fff;
        padding: 30px;
        margin-bottom: 15px
    }

    .get-price-block {
        padding: 100px 30px 140px
    }

    .get-price-block p {
        line-height: 30px
    }

    .content_block {
        padding: 100px 30px
    }

    .content_block .title {
        padding-bottom: 40px
    }

    .content_block .title h2 {
        text-align: center;
        font-size: 46px;
        font-weight: 400;
        line-height: 50px
    }

    .content_block .sub_title {
        padding-bottom: 50px
    }

    .content_block .sub_title p {
        color: #5c5c5c;
        line-height: 30px;
        font-size: 18px
    }

    .content_block .column_3 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%;
        max-width: 870px;
        margin: auto
    }

    .content_block .column_3 .item {
        padding: 0 15px
    }

    .content_block .column_3 .item .title {
        padding-bottom: 20px
    }

    .content_block .column_3 .item .title h4 {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px
    }

    .content_block .column_3 .item .text p,.content_block .column_3 .item .text a {
        color: #5c5c5c;
        font-size: 16px;
        padding-bottom: 10px;
        text-decoration: none;
        line-height: 30px
    }

    .content_block .column_3 .item .text p:last-child,.content_block .column_3 .item .text a:last-child {
        padding-bottom: 0
    }

    .content_block .column_3 .item .text a {
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .content_block .column_3 .item .text a:hover {
        color: #377dff
    }

    .content_block .column_2 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        max-width: 570px;
        margin: auto
    }

    .content_block .column_2 .item {
        padding: 0 15px
    }

    .content_block .column_2 .item ul {
        padding: 0;
        margin: 0
    }

    .content_block .column_2 .item ul li {
        font-size: 18px;
        list-style: none;
        position: relative;
        padding-left: 30px;
        margin-bottom: 15px
    }

    .content_block .column_2 .item ul li:last-child {
        margin-bottom: 0
    }

    .content_block .column_2 .item ul li:before {
        content: "";
        background: #c3c3c3;
        width: 8px;
        height: 8px;
        display: inline-block;
        position: absolute;
        top: 5px;
        left: 0;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .content_block .text_section {
        max-width: 800px;
        margin: auto
    }

    .content_block .text_section .text_block {
        padding-bottom: 50px
    }

    .content_block .text_section .text_block:last-child {
        padding-bottom: 0
    }

    .content_block .text_section .text_block .title {
        padding-bottom: 30px
    }

    .content_block .text_section .text_block .title h3 {
        text-align: center;
        font-size: 36px;
        font-weight: 400
    }

    .content_block .text_section .text_block .text p {
        color: #5c5c5c;
        line-height: 30px;
        font-size: 18px
    }

    .content_block .text_section .text_block .text li {
        color: #5c5c5c;
        font-size: 18px;
        padding-left: 30px;
        margin-bottom: 15px;
        position: relative;
        list-style: none
    }

    .content_block .text_section .text_block .text li:before {
        content: "";
        background: #c3c3c3;
        width: 8px;
        height: 8px;
        display: inline-block;
        position: absolute;
        top: 5px;
        left: 0;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .footer {
        background-repeat: repeat;
        padding: 109px 0 0;
        color: #fff;
        overflow: hidden
    }

    .footer .logo {
        width: 100%;
        padding-bottom: 33px
    }

    .footer .logo a {
        margin: 0 auto
    }

    .footer .logo a img {
        width: 200px;
        height: auto
    }

    .footer-top .container {
        border-bottom: 1px solid #d0d0d0;
        max-width: 1190px;
        padding-bottom: 56px
    }

    .footer-block-holder {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        color: #fff
    }

    .footer-block-holder a {
        color: #fff;
        text-decoration: none
    }

    .footer-block-holder ul {
        margin: 0;
        padding: 0
    }

    .footer-block-holder ul li {
        list-style: none
    }

    .footer-block-holder .footer-block {
        padding: 0 10px;
        width: 25%
    }

    .footer-block-holder .footer-block:nth-child(1) {
        width: 17%
    }

    .footer-block-holder .footer-block:nth-child(2) {
        width: 33%
    }

    .footer-block-holder .footer-block .block-heading {
        font-size: 18px;
        line-height: 30px;
        padding-bottom: 32px
    }

    .footer-block-holder .footer-block .menu-wrap ul li {
        font-size: 14px;
        line-height: 30px
    }

    .footer-block-holder .footer-block.articles-list ul li {
        position: relative;
        font-size: 14px;
        line-height: 20px;
        position: relative;
        padding-bottom: 20px;
        margin-bottom: 21px
    }

    .footer-block-holder .footer-block.articles-list ul li:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 63%;
        height: 1px;
        background: #fff
    }

    .footer-block-holder .footer-block.articles-list ul li:last-child {
        margin-bottom: 0
    }

    .footer-block-holder .footer-block.site-info {
        text-align: right;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .footer-block-holder .footer-block.site-info a {
        font-size: 16px;
        line-height: 30px
    }

    .footer-block-holder .footer-block.site-info address {
        font-style: normal
    }

    .footer-block-holder .footer-block.site-info .social-nav {
        padding-top: 69px
    }

    .social-nav ul li {
        display: inline-block;
        vertical-align: top;
        padding: 0 3px;
        font-size: 18px
    }

    .social-nav ul li a {
        display: block;
        width: 28px;
        height: 28px;
        color: #303030;
        background: #fff;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        overflow: hidden;
        position: relative
    }

    .social-nav ul li a:hover {
        background: #d9d9d9;
        color: #303030
    }

    .social-nav ul li a .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%)
    }

    .main-footer {
        padding: 22px 0;
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .main-footer .footer-info {
        font-size: 12px;
        padding-bottom: 10px
    }

    .main-footer .footer-info p {
        color: #fff
    }

    @media(min-width: 768px) {
        .main-footer .footer-info {
            padding:4px 0
        }
    }

    .main-footer .footer-info p {
        display: block
    }

    .main-footer .footer-info p a {
        display: inline-block;
        vertical-align: top;
        text-decoration: none;
        color: #fff;
        -webkit-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease
    }

    .main-footer .footer-info p a:hover {
        text-decoration: underline
    }

    @media(min-width: 768px) {
        .main-footer .footer-info.right {
            float:right
        }
    }

    .main-footer .footer-info.right ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0
    }

    .main-footer .footer-info.right ul li {
        list-style: none;
        padding-left: 10px
    }

    .main-footer .footer-info.right ul li a {
        text-decoration: none;
        color: #fff;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms
    }

    .main-footer .footer-info.right ul li a:hover {
        color: #377dff
    }

    .main-footer .up-button {
        display: block;
        text-decoration: none;
        width: 40px;
        height: 40px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        border: 2px solid #3d3d3d;
        margin: 0 auto;
        text-align: center;
        overflow: hidden;
        color: #3d3d3d;
        position: relative;
        -webkit-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease
    }

    @media(min-width: 768px) {
        .main-footer .up-button {
            position:absolute;
            left: 0;
            right: 0
        }
    }

    .main-footer .up-button:hover {
        color: #f2f2f2;
        border: 2px solid #f2f2f2
    }

    .main-footer .up-button .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%) rotate(90deg);
        -ms-transform: translate(-50%,-50%) rotate(90deg);
        transform: translate(-50%,-50%) rotate(90deg)
    }

    .error404 .footer {
        overflow: unset
    }

    .footer.page_404 {
        padding: 0;
        color: #a2a2a2
    }

    .footer.page_404 .main-footer {
        border-top: 1px solid #a2a2a2;
        margin-bottom: 17px
    }

    .footer.page_404 .main-footer .footer-info.right ul li a {
        color: #a2a2a2
    }

    @media all and (max-width: 1023px) {
        .footer {
            padding:60px 0 0
        }

        .footer-top .container {
            padding-bottom: 20px
        }

        .footer-block-holder {
            max-width: 600px;
            margin: auto
        }

        .footer-block-holder .footer-block {
            padding: 0 25px;
            width: 50%;
            padding-bottom: 25px
        }

        .footer-block-holder .footer-block:nth-child(1) {
            width: 50%
        }

        .footer-block-holder .footer-block:nth-child(2) {
            width: 50%
        }

        .footer-block-holder .footer-block.site-info {
            text-align: left
        }
    }

    @media all and (max-width: 768px) {
        .footer-block-holder {
            max-width:360px;
            margin: auto
        }

        .footer-block-holder .footer-block {
            padding: 0 10px;
            width: 100%;
            padding-bottom: 25px
        }

        .footer-block-holder .footer-block:nth-child(1) {
            width: 100%
        }

        .footer-block-holder .footer-block:nth-child(2) {
            width: 100%
        }

        .footer-block-holder .footer-block .block-heading {
            padding-bottom: 10px
        }

        .footer-block-holder .footer-block.site-info {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1
        }

        .footer-block-holder .footer-block.site-info .social-nav {
            padding-top: 15px
        }

        .footer-block-holder .footer-block .menu-wrap ul li {
            font-size: 15px;
            line-height: 26px
        }

        .footer-block-holder .footer-block.articles-list ul li {
            position: relative;
            font-size: 15px;
            line-height: 20px;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 21px
        }

        .footer-block-holder .footer-block.articles-list ul li:last-child:after {
            display: none
        }
    }

    @media all and (max-width: 1023px) {
        .blog_nav {
            -webkit-box-orient:vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 20px
        }

        .blog_nav ul {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .blog_nav ul li {
            margin-right: 0
        }

        .blog_nav ul li a:before {
            bottom: 0
        }

        .search_block .form_search {
            position: relative;
            top: 0;
            margin-bottom: 15px
        }

        .search_block .form_search input {
            width: 299px;
            opacity: 1;
            padding: 0 40px 0 15px;
            position: relative
        }

        .search_block .form_search .search {
            z-index: 5
        }

        .header .header-content {
            padding: 35px 15px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .header .header-content .menus_wrap {
            width: 100%;
            overflow-y: auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .header .header-content .header-navigation {
            padding-right: 0
        }

        .header .header-content .header-navigation ul li a {
            font-size: 16px
        }

        .header .header-content .header-navigation ul li a:hover {
            color: #fff
        }

        .header .header-content .header-navigation .btn_transparent {
            padding: 15px 0
        }

        .header .header-content .header-navigation.menu_city {
            margin-left: 0
        }

        .header.header_blog .header-content {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-bottom: 50px
        }

        .header.header_blog .header-content .menus_wrap {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .header-navigation>ul>li {
            position: relative;
            display: table;
            margin: auto
        }

        .header-navigation>ul>li>a {
            position: relative
        }

        .header-navigation>ul>li>a .arrow {
            position: absolute;
            cursor: pointer;
            display: block;
            width: 20px;
            height: 20px;
            top: 0;
            left: 0;
            width: 100%
        }

        .header-navigation>ul>li>a .arrow .fa {
            font-size: 18px;
            -webkit-transition: all 300ms;
            -o-transition: all 300ms;
            transition: all 300ms;
            position: absolute;
            right: -20px
        }

        .header-navigation>ul>li .sub-menu {
            display: none
        }

        .header-navigation>ul>li .sub-menu li:first-child {
            margin-top: 15px
        }

        .header-navigation>ul>li.arr_top>a .arrow .fa {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .header .header-content .header-navigation>ul>li.menu-item-has-children:before {
            border-top: 6px solid #fff
        }

        .header.page-header .header-content .header-navigation>ul>li.menu-item-has-children:before {
            border-top: 6px solid #303030
        }

        .fb_iframe_widget span {
            width: 100%!important
        }

        .fb_iframe_widget span iframe {
            width: 100%!important
        }

        .blog_page .container {
            max-width: 800px;
            margin: auto
        }

        .inner_content {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .inner_content .resent_post_wrap {
            margin: auto;
            width: 100%
        }

        .inner_content .resent_post_wrap .resent_post {
            width: 100%
        }

        .inner_content .blog_aside {
            width: 100%;
            max-width: 800px;
            margin: auto;
            margin-top: 40px
        }

        .aside_item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            max-width: 800px
        }

        .aside_item .aside_form_wrap {
            display: none
        }

        .aside_item .facebook_widjet {
            padding: 10px;
            width: 49%
        }

        .aside_item .recent_widjet {
            background: #fff;
            padding: 30px 10px;
            width: 49%
        }

        .slider_post_wrap .item .title a {
            font-size: 22px;
            line-height: 22px
        }

        .slider_post_wrap .item .content .text {
            line-height: 22px
        }

        .main-footer {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .main-footer ul li {
            padding-left: 0
        }

        .content_block {
            padding: 60px 30px
        }

        .content_block .title h2 {
            font-size: 36px
        }

        .content_block .text_section .text_block {
            margin-top: 60px
        }

        .content_block .text_section .text_block .title h3 {
            font-size: 28px
        }

        .want_work_section .section .content .title h2 {
            font-size: 36px
        }

        .section_404 .image img {
            max-width: 150px
        }

        .section_404 .title h1 {
            font-size: 70px;
            line-height: 70px
        }

        .footer.page_404 .main-footer {
            margin-bottom: 0
        }

        .want_work_section.right .section {
            padding-bottom: 60px
        }

        .want_work_section.right .section .content {
            width: 100%
        }

        .want_work_section.right .section .content .title {
            text-align: center
        }

        .want_work_section.right .section .content .text h3 {
            text-align: center
        }

        .want_work_section.right .section .content .text ul {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            max-width: 640px;
            padding-left: 0;
            margin: 20px auto
        }

        .want_work_section.right .section .content .button-wrapper {
            text-align: center
        }

        .want_work_section.right .section .image {
            width: auto;
            display: none
        }

        .list_services_customize ul {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .work-block.text_section {
            padding: 60px 0!important
        }

        .work-block.text_section .heading-text {
            font-size: 28px
        }

        .work-block.text_section .text_wrap {
            padding-top: 40px
        }

        .work-block.text_section .text_wrap:first-child {
            padding-top: 0
        }

        .work-block.text_section .text_wrap .heading-text {
            margin-bottom: 15px
        }

        .work-block.all_services {
            padding: 60px 0!important
        }

        .work-block.all_services .heading-text {
            margin-bottom: 30px;
            font-size: 28px
        }

        .all_services_wrap {
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around
        }

        .all_services_wrap .item {
            width: 48%;
            margin-bottom: 40px
        }

        .all_services_wrap .item .title h3 a {
            font-size: 18px;
            line-height: 22px
        }

        .work-block.different_services_section {
            padding: 60px 0!important
        }

        .work-block.different_services_section .heading-text {
            margin-bottom: 30px;
            font-size: 28px
        }

        .different_tab_wrap {
            padding-top: 35px
        }

        .different_tab_wrap .tab_title ul li a.title {
            font-size: 40px;
            line-height: 50px
        }

        .different_tab_wrap .tab_wrap .tab_content {
            margin-top: 50px
        }

        .different_tab_wrap .tab_wrap .tab_content .tab_item {
            margin-bottom: 50px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .different_tab_wrap .tab_wrap .tab_content .tab_item>div {
            width: 100%
        }

        .different_tab_wrap .tab_wrap .tab_content .tab_item:nth-child(2n) .item_text {
            -webkit-box-ordinal-group: 1;
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            padding-left: 0
        }

        .different_tab_wrap .tab_wrap .tab_content .tab_item .item_image {
            padding-top: 25px
        }

        .banner.page-banner.get_price {
            padding: 60px 20px
        }

        .banner.page-banner.get_price .banner-content .heading-block .heading-text {
            font-size: 28px;
            line-height: 32px
        }

        .banner.page-banner.get_price .banner-content .heading-block .sub-para {
            font-size: 20px;
            line-height: 24px
        }

        .banner.page-banner.get_price .banner-content .services-list ul li {
            padding: 0
        }

        .banner.page-banner.get_price .banner-content .services-list ul li:after {
            display: none
        }

        .banner.page-banner.get_price .banner-content .review-text {
            padding-bottom: 30px
        }

        .heading-block .heading-text {
            font-size: 28px
        }

        .work-block.text_image_fuel {
            padding: 60px 0!important
        }

        .work-block.text_image_fuel .btn_group {
            margin-top: 40px
        }

        .work-block.text_image_fuel .image_group {
            margin-top: 40px
        }

        .work-block.text_image_fuel .text_group {
            margin-top: 40px
        }

        .work-block.image_list {
            padding: 60px 0!important
        }

        .work-block.image_list .item .heading-block .sub-para {
            margin-top: 40px
        }

        .work-block.image_list .text {
            margin-top: 40px
        }
    }

    @media all and (max-width: 768px) {
        .work-block.text_image_fuel .btn_group {
            -webkit-box-orient:vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center
        }

        .work-block.text_image_fuel .btn_group .link_btn,.work-block.text_image_fuel .btn_group .transparent_btn {
            max-width: 100%;
            width: 100%
        }

        .work-block.text_image_fuel .btn_group .link_btn a,.work-block.text_image_fuel .btn_group .transparent_btn a {
            width: 100%;
            max-width: 300px
        }

        .work-block.text_image_fuel .btn_group .transparent_btn {
            margin-top: 15px
        }

        .image_list_block {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .image_list_block .item {
            width: 100%
        }

        .image_list_block .item:first-child {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1
        }

        .image_list_block .item .heading-block {
            text-align: center
        }

        .all_services_wrap {
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around
        }

        .all_services_wrap .item {
            width: 100%;
            max-width: 100%
        }

        .all_services_wrap .item .title {
            height: auto;
            padding-bottom: 10px
        }

        .all_services_wrap .item .title h3 a {
            font-size: 18px;
            line-height: 22px
        }

        .different_tab_wrap .tab_title ul {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .different_tab_wrap .tab_title ul li {
            padding-bottom: 15px
        }

        .different_tab_wrap .tab_wrap {
            padding-top: 20px
        }

        .banner.page-banner.get_price {
            padding: 60px 20px
        }

        .banner.page-banner.get_price .banner-content .heading-block .heading-text {
            font-size: 28px;
            line-height: 32px
        }

        .banner.page-banner.get_price .banner-content .heading-block .sub-para {
            font-size: 20px;
            line-height: 24px
        }

        .banner.page-banner.get_price .banner-content .services-list ul {
            width: 100%;
            max-width: 320px
        }

        .banner.page-banner.get_price .banner-content .services-list ul li {
            padding: 0;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-bottom: 10px
        }

        .banner.page-banner.get_price .banner-content .services-list ul li:after {
            display: none
        }

        .banner.page-banner.get_price .banner-content .review-text {
            padding-bottom: 30px
        }

        .method_wrap {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .method_wrap .item {
            width: 100%;
            padding-bottom: 35px
        }

        .method_wrap .item:last-child {
            padding-bottom: 0
        }

        .text-faq .transparent_btn {
            margin: auto
        }

        .office-cleaning .want_work_section .section .content .sub_title p {
            font-size: 16px
        }

        .office-cleaning .want_work_section .section {
            padding: 50px 0
        }

        .office-cleaning .want_work_section .section .image {
            max-width: 150px;
            margin: auto;
            min-width: auto;
            margin-bottom: 40px
        }

        .satisfaction-block.page_connector_2 {
            padding: 70px 0
        }

        .satisfaction-block.page_connector_2 .heading-block h2.heading-text {
            font-size: 28px
        }

        .satisfaction-block.page_connector_2 .heading-block p {
            font-size: 22px
        }

        .satisfaction-block.page_connector_3 {
            padding: 70px 0
        }

        .satisfaction-block.page_connector_3 .heading-block h2.heading-text {
            font-size: 28px
        }

        .want_work_section.right .section .content {
            text-align: left
        }

        .want_work_section.right .section .content .title h2 {
            font-size: 22px
        }

        .want_work_section.right .section .content .text h3 span {
            font-size: 28px!important
        }

        .want_work_section.right .section .content .text ul {
            max-width: 320px
        }

        .want_work_section.right .section .content .text ul li {
            width: 100%
        }

        .social_page {
            display: none
        }

        .single_post .title h1 {
            font-size: 22px;
            line-height: 26px
        }

        .single_post .post_info .info {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .single_post .post_info .info>div {
            padding-right: 0;
            padding-bottom: 10px
        }

        .single_post .single_post_inner .content p {
            line-height: 22px
        }

        .blog_aside .aside_item {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .blog_aside .aside_item .recent_widjet {
            width: 100%;
            padding: 30px
        }

        .blog_aside .aside_item .facebook_widjet {
            padding: 30px;
            text-align: center;
            width: 100%
        }

        .blog_aside .aside_item .facebook_widjet .fb-page {
            max-width: 338px
        }

        .slider_post_wrap {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .slider_post_wrap .item {
            width: 100%
        }

        .list-block.services-list ul {
            display: table;
            margin: auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: auto
        }

        .list-block.services-list ul li {
            margin-bottom: 15px
        }

        .services-pricing .banner.page-banner {
            padding: 30px
        }

        .services-pricing .review-text {
            padding-bottom: 30px
        }

        .content_block {
            padding: 60px 30px
        }

        .content_block .title h2 {
            font-size: 30px;
            line-height: 40px
        }

        .content_block .text_section .text_block {
            margin-top: 40px
        }

        .content_block .text_section .text_block .title h3 {
            font-size: 24px
        }

        .content_block .text_section .text_block .text p {
            font-size: 16px
        }

        .content_block .sub_title {
            padding-bottom: 30px
        }

        .content_block .sub_title p {
            font-size: 16px
        }

        .content_block .column_3 {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .content_block .column_3 .item {
            text-align: center;
            padding-bottom: 25px
        }

        .content_block .column_3 .item:last-child {
            padding-bottom: 0
        }

        .content_block .column_3 .item .title {
            padding-bottom: 10px
        }

        .content_block .column_2 .item ul li {
            font-size: 16px
        }

        .want_work_section .section {
            padding-top: 30px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .want_work_section .section .content {
            width: 100%;
            text-align: center
        }

        .want_work_section .section .content .title h2 {
            font-size: 30px
        }

        .want_work_section .section .content .sub_title p {
            font-size: 16px
        }

        .seo_block_w .container {
            padding: 0 40px
        }

        .seo_block_left,.seo_block_right,.seo_block_center {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .seo_block_left>div,.seo_block_right>div,.seo_block_center>div {
            width: 100%
        }

        .seo_block_left .image_seo,.seo_block_right .image_seo,.seo_block_center .image_seo {
            width: 100%;
            max-width: 300px;
            margin: auto;
            text-align: center;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1
        }

        .seo_block_left .seo_content,.seo_block_right .seo_content,.seo_block_center .seo_content {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
            padding-bottom: 30px
        }

        .link_btn {
            text-align: center;
            padding-bottom: 0
        }

        .map_block {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .map_block .item {
            width: 100%
        }

        .map_block .item.image {
            padding-bottom: 30px;
            max-height: 400px
        }

        .popular_services {
            padding: 38px 15px 4px
        }

        .popular_services .half_width_wrap {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .popular_services .half_width_wrap .half_width {
            width: 100%
        }

        .text_image_wrap .text_image_block {
            margin-bottom: 60px;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .text_image_wrap .text_image_block:last-child {
            margin-bottom: 0
        }

        .text_image_wrap .text_image_block>div {
            width: 100%
        }

        .text_image_wrap .text_image_block .item_text {
            padding-right: 0
        }

        .text_image_wrap .text_image_block .item_text .title {
            padding-bottom: 20px
        }

        .text_image_wrap .text_image_block .item_image {
            margin-top: 30px
        }

        .text_image_wrap .text_image_block:nth-child(2n) .item_text {
            -webkit-box-ordinal-group: 1;
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            padding-right: 0;
            padding-left: 0
        }

        .footer-site-info {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .chat_list_wrap p {
            font-size: 13px;
            line-height: 19px;
            padding: 15px
        }

        .chat_list_wrap p:nth-child(2) {
            padding: 15px
        }

        .work-block.customize_service {
            padding-bottom: 0
        }
    }

    @media all and (max-width: 576px) {
        .slider_post_wrap .item .title h1,.resent_post_wrap .item .title h1 {
            line-height:22px
        }

        .slider_post_wrap .item .title h1 a,.resent_post_wrap .item .title h1 a {
            font-size: 20px;
            line-height: inherit
        }

        .slider_post_wrap .item .content,.resent_post_wrap .item .content {
            padding: 20px
        }

        .slider_post_wrap .item .content .text,.resent_post_wrap .item .content .text {
            padding-bottom: 15px;
            font-size: 16px;
            line-height: 20px
        }

        .slider_post_wrap .item .content .top_block,.resent_post_wrap .item .content .top_block {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .slider_post_wrap .item .content .bottom_block,.resent_post_wrap .item .content .bottom_block {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            bottom: 0
        }

        .slider_post_wrap .item .content .bottom_block .btn,.resent_post_wrap .item .content .bottom_block .btn {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1
        }

        .slider_post_wrap .item .content .bottom_block .post_info,.resent_post_wrap .item .content .bottom_block .post_info {
            padding-bottom: 10px
        }

        .slider_post_wrap .wp-pagenavi,.resent_post_wrap .wp-pagenavi {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .slider_post_wrap .wp-pagenavi .pages,.resent_post_wrap .wp-pagenavi .pages {
            display: none
        }

        .blog_aside .aside_item .facebook_widjet {
            padding: 20px
        }

        .resent_post_wrap .form form {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .resent_post_wrap .form form .gform_body {
            width: 100%
        }

        .resent_post_wrap .form form .gform_footer {
            width: 100%
        }

        .single_post .post_info {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .content_block .column_2 {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .content_block .column_2 .item {
            padding-bottom: 15px
        }
    }
}

@media all {
    body {
        font-family: avenir;
        font-display: swap
    }

    .background-video-wrapper {
        background: #e1e1e1
    }

    .header {
        transition: all 0ms
    }

    .page-header {
        transition: all 0ms
    }

    .header_info .logo {
        height: 26px
    }

    .home .header,.header.header_transparent {
        background: 0 0
    }

    .link_btn a {
        padding: 0;
        height: 50px;
        box-sizing: border-box;
        display: flex;
        width: 260px;
        margin: initial;
        justify-content: center;
        line-height: 53px;
        margin: auto
    }

    .seo_content .link_btn a,.want_work_section .link_btn a {
        margin-left: 0
    }

    .home.page .work-block.home_map .link_btn,.page.philadelphia .work-block.home_map .link_btn,.page.chicago .work-block.home_map .link_btn {
        display: flex;
        justify-content: center
    }

    .page .header.header_transparent {
        position: absolute;
        top: 0;
        left: 0;
        right: 0
    }

    .header_transparent .header-navigation .sub-menu {
        background: #373944
    }

    .slider_post_wrap .item .content .cat_name p {
        display: inline-block
    }

    .related_posts {
        display: block;
        width: 100%;
        background: #fff;
        padding: 40px;
        margin-top: 40px;
        box-sizing: border-box;
        height: 100%
    }

    .related_posts_wrap {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: space-between;
        height: 100%
    }

    .related_posts_wrap .item {
        width: 48%;
        margin-top: 40px;
        display: flex
    }

    .related_posts_wrap .item a {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .related_posts_wrap .item a .image {
        width: 100%;
        height: 100%
    }

    .related_posts_wrap .item a .image img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: all 500ms
    }

    .related_posts_wrap .item a:hover span {
        color: #377dff
    }

    .related_posts_wrap .item a span {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(255,255,255,.7);
        text-align: center;
        padding: 15px;
        color: #5c5c5c;
        transition: all 500ms
    }

    blockquote ul li,blockquote ol li {
        padding-bottom: 20px
    }

    blockquote ul li:last-child,blockquote ol li:last-child {
        padding-bottom: 0
    }

    blockquote.green {
        background: #84e295;
        margin: 0;
        padding: 30px
    }

    blockquote.grey {
        background: #f5f5f5;
        margin: 0;
        padding: 30px
    }

    blockquote.blue {
        background: #eff7ff;
        margin: 0;
        padding: 30px
    }

    blockquote.yellow {
        background: #ff9;
        margin: 0;
        padding: 30px
    }

    header.page-header.header_blog.small {
        padding-bottom: 15px;
        padding-top: 15px
    }

    header.page-header.header_blog.small .header_top {
        margin-top: 0
    }

    header.page-header.header_blog.small .header_top .header-content {
        order: 0
    }

    header.page-header.header_blog.small .search_block {
        margin-left: 80px
    }

    header.page-header.header_blog.small .search_block .form_search {
        top: 0;
        width: auto
    }

    header.page-header.header_blog.small .search_block .form_search input {
        font-size: 16px;
        line-height: 1
    }

    .header_blog.small .search_block .form_search .search {
        background: 0 0
    }

    .header_blog.small .search_block .form_search .search:after {
        width: 17px;
        height: 17px;
        border: 2px solid #ccc;
        top: -5px
    }

    .header_blog.small .search_block .form_search .search:before {
        left: 11px;
        width: 5px;
        height: 2px;
        background: #ccc;
        top: 10px
    }

    .header_blog.small .search_block .form_search input:focus {
        width: 360px
    }

    .header_blog.small .search_block .form_search input:focus~.search::after {
        top: 0;
        left: 0;
        width: 25px;
        height: 2px;
        border: 0;
        background: #303030;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .header_blog.small .search_block .form_search input:focus~.search::before {
        top: 0;
        left: 0;
        width: 25px;
        background: #303030
    }

    .header_blog.small .header-navigation>ul>li.menu-item-has-children>a::before {
        border-top: 4px solid #303030
    }

    .header_blog.small .header-navigation>ul>li.menu-item-has-children>a {
        position: relative;
        padding-right: 20px
    }

    .blog_page.post_new {
        padding-top: 0
    }

    .blog_page.post_new .social .apss-icon-block .fab {
        color: #5c5c5c;
        font-family: fontawesome;
        font-style: normal
    }

    .apss-theme-4 .apss-single-icon .fa,.apss-theme-4 .apss-single-icon .fas,.apss-theme-4 .apss-single-icon .fab {
        font-family: fontawesome;
        font-style: normal
    }

    .blog_page.post_new .recent_widjet {
        padding-top: 30px
    }

    .blog_page.post_new .recent_widjet .recent_list ul li a {
        font-size: 14px
    }

    .blog_page.post_new .author_info_block {
        background: #fff;
        padding: 30px;
        padding-bottom: 16px
    }

    .blog_page.post_new .author_info_block .avatar {
        padding-bottom: 20px;
        display: block
    }

    .blog_page.post_new .author_info_block .avatar img {
        border-radius: 50%;
        object-fit: cover;
        width: 80px;
        height: 80px
    }

    .blog_page.post_new .author_info_block .name {
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;
        color: #303030;
        padding-bottom: 10px
    }

    .blog_page.post_new .author_info_block .description_info {
        font-size: 14px;
        line-height: 18px;
        color: #5c5c5c
    }

    .blog_page.post_new .inner_content {
        background: #fff
    }

    .blog_page.post_new .inner_content .resent_post_wrap {
        padding-left: 160px;
        position: relative
    }

    .blog_page.post_new .inner_content .resent_post_wrap .single_post {
        padding-top: 80px
    }

    .blog_page.post_new .single_post .post_info .author p {
        font-size: 14px
    }

    .blog_page.post_new .single_post_inner {
        padding-top: 18px
    }

    .blog_page.post_new .blog_aside {
        padding-top: 52px;
        width: 28%
    }

    .blog_page.post_new .resent_post_wrap .social {
        position: absolute;
        top: 160px;
        left: 77px
    }

    .blog_page.post_new .resent_post_wrap .social .apss-social-share {
        display: flex;
        flex-direction: column
    }

    .blog_page.post_new .resent_post_wrap .social .apss-social-share .apss-single-icon {
        margin-bottom: 25px
    }

    .blog_page.post_new .resent_post_wrap .social .apss-social-share .apss-single-icon a .apss-icon-block {
        background: 0 0
    }

    .blog_page.post_new .resent_post_wrap .social .apss-social-share .apss-single-icon a .fa {
        color: #ccc;
        font-size: 16px
    }

    .blog_page.post_new .resent_post_wrap .social .apss-social-share .apss-single-icon a .fa:hover {
        color: #377dff
    }

    .blog_page.post_new .posts_navigation {
        padding-top: 25px
    }

    .blog_page.post_new .banner_post_new {
        display: flex;
        justify-content: center;
        min-height: 640px;
        align-items: flex-end;
        margin-bottom: 43px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover
    }

    .banner_post_new .banner_content {
        max-width: 750px;
        padding-bottom: 54px
    }

    .banner_post_new .banner_content .category .post-categories {
        list-style: none;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
        margin: 0;
        padding: 0
    }

    .banner_post_new .banner_content .category .post-categories li {
        padding: 3px
    }

    .banner_post_new .banner_content .category .post-categories li:last-child a:after {
        display: none
    }

    .banner_post_new .banner_content .category .post-categories li a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        line-height: 30px;
        display: block
    }

    .banner_post_new .banner_content .category .post-categories li a:after {
        content: ",";
        display: inline-block
    }

    .banner_post_new .banner_content .title {
        color: #fff;
        font-size: 46px;
        line-height: 56px;
        font-weight: 700;
        text-align: center;
        padding-bottom: 48px
    }

    .banner_post_new .banner_content .description_info {
        display: flex;
        align-items: center;
        color: #fff;
        justify-content: center
    }

    .banner_post_new .banner_content .description_info p {
        padding: 0 10px;
        color: #fff;
        font-size: 16px;
        line-height: 30px
    }

    .banner_post_new .banner_content .description_info .comment_count {
        display: flex;
        color: #fff
    }

    .banner_post_new .banner_content .description_info .comment_count p a {
        color: #fff;
        text-decoration: none
    }

    .facebook_widjet {
        padding: 0;
        margin-bottom: 30px
    }

    .recent_widjet {
        padding: 30px
    }

    .different_tab_wrap .tab_title ul li {
        align-items: center
    }

    .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image .image:before {
        display: none
    }

    .different_tab_wrap .tab_wrap .tab_one {
        display: none
    }

    .different_tab_wrap .tab_wrap .tab_one.active {
        display: block
    }

    .lwptoc.lwptoc-baseItems .lwptoc_items {
        font-size: 100%
    }

    .interview_iframe * {
        overflow-y: auto
    }

    .interview_iframe #wrapper {
        overflow-y: auto
    }

    .rplg .rplg-badge_left-fixed,.rplg-form.rplg-form-left {
        font-family: helvetica neue!important
    }

    .rplg .rplg-review-text {
        color: #222!important;
        font-size: 13px!important;
        line-height: 18px!important
    }

    .rplg-row .rplg-row-right {
        text-align: left!important;
        line-height: 18px!important;
        padding-left: 5px
    }

    .rplg-form .rplg-form-content-inner {
        padding: 16px 16px 0!important
    }

    .rplg .rplg-row.rplg-row-start {
        margin-top: 15px!important
    }

    .rplg .rplg-stars svg {
        width: 16px!important;
        height: 16px!important
    }

    .rplg-form .rplg-review-name {
        font-weight: 700!important;
        margin: 0 0 2px!important;
        padding-right: 6px!important;
        line-height: 20px!important
    }

    .rplg .rplg-review-time {
        color: #999!important;
        font-size: 13px!important;
        line-height: 20px!important
    }

    .rplg .rplg-stars {
        margin-right: 4px!important
    }

    .rplg .rplg-biz-rating.rplg-biz-google .rplg-biz-score {
        color: #e7711b!important;
        font-size: 20px!important;
        margin: 0 6px 0 0!important;
        vertical-align: middle!important;
        font-weight: 400!important
    }

    .rplg-biz-rating.rplg-trim.rplg-biz-google .rplg-stars svg {
        width: 17px!important;
        height: 17px!important
    }

    .rplg-form-head-inner .rplg-row-right.rplg-trim {
        color: #000!important;
        font-size: 14px!important;
        font-weight: 700!important;
        margin: 0 0 2px!important;
        padding-right: 6px!important
    }

    .method_wrap .item p {
        color: #fff
    }

    .iframe-code .rplg-row-right {
        display: flex;
        justify-content: center
    }

    .iframe-code .rplg-businesses .rplg-row-left {
        display: none
    }

    .iframe-code .rplg .rplg-biz-name a {
        font-size: 34px!important;
        line-height: 41px!important;
        font-weight: 400!important;
        color: #303030
    }

    .iframe-code .rplg .rplg-slider .rplg-box {
        background-color: #fff!important
    }

    .iframe-code .rplg-grid-row.rplg-businesses .rplg-box {
        background-color: transparent!important
    }

    .iframe-code .rplg-stars svg use {
        fill: #ff8d00
    }

    .rplg-stars svg use {
        fill: #ff8d00
    }

    .iframe-code .rplg .rplg-biz-rating .rplg-biz-score {
        color: #ff8d00!important
    }

    .iframe-code .rplg .rplg-slider .rplg-slider-prev {
        left: -50px!important;
        top: 37%!important
    }

    .iframe-code .rplg .rplg-slider .rplg-slider-prev span {
        font-size: 50px!important
    }

    .iframe-code .rplg .rplg-slider .rplg-slider-next {
        right: -50px!important;
        top: 37%!important
    }

    .iframe-code .rplg .rplg-slider .rplg-slider-next span {
        font-size: 50px!important
    }

    .iframe-code .rplg .rplg-slider .rplg-row-right {
        display: flex;
        flex-direction: column
    }

    .iframe-code .bkt-card {
        background-color: #fff;
        box-shadow: 0;
        margin-bottom: 1.5rem;
        border: 0;
        border-radius: .25rem
    }

    .reviews_list .rplg-row-right {
        justify-content: flex-start;
        flex-direction: column
    }

    .reviews_slider,#brb_collection_4382 {
        padding-left: 50px;
        padding-right: 50px
    }

    .iframe-code .rplg-grid .rplg-box {
        padding-left: 5px!important;
        padding-right: 5px!important
    }

    .banner-content .banner-title {
        line-height: 1
    }

    .footer-site-info {
        font-size: 17px
    }

    .footer-block-holder .footer-block.site-info p {
        font-size: 17px;
        color: #fff
    }

    .footer .logo {
        padding-bottom: 28px
    }

    .banner-text .heading-block .heading-text {
        line-height: 1.2
    }

    .page-banner .heading-block .heading-text {
        line-height: 1.2
    }

    .single_post .title h1 {
        font-family: inherit
    }

    .all_services_wrap .item .image {
        min-height: 250px;
        margin-bottom: 10px
    }

    .all_services_wrap .item {
        margin-bottom: 30px;
        position: relative
    }

    .all_services_wrap .item .link_box {
        position: absolute;
        width: 100%;
        height: 100%;
        display: block;
        top: 0;
        left: 0;
        z-index: 2
    }

    .all_services_wrap .item .title a {
        transition: all 300ms
    }

    .all_services_wrap .item:hover .title a {
        color: #377dff
    }

    header .phone_top a {
        font-weight: 700
    }

    .contact-page-block .contact-info .detail-info address a {
        text-decoration: none;
        color: #5c5c5c;
        transition: all 300ms
    }

    .contact-page-block .contact-info .detail-info address a:hover {
        color: #377dff
    }

    .contact-page-block .contact-info .detail-info .phone_block {
        display: flex;
        align-items: center
    }

    .contact-page-block .contact-info .detail-info .phone_block a {
        text-decoration: none;
        color: #5c5c5c;
        transition: all 300ms;
        margin-left: 3px
    }

    .contact-page-block .contact-info .detail-info .phone_block a:hover {
        color: #377dff
    }

    .acf-map {
        width: 100%;
        height: 600px
    }

    .acf-map img {
        max-width: inherit!important
    }

    .contact-page-block .contact-info .detail-info .info-header {
        padding-bottom: 15px
    }

    .contact-page-block .contact-info-holder .col {
        width: 50%
    }

    .detail-info-holder .detail-info {
        max-width: 100%
    }

    .detail_info_wrap {
        display: flex;
        flex-wrap: wrap
    }

    .detail_info_inner {
        width: 50%;
        padding-right: 15px;
        padding-bottom: 30px
    }

    .detail_info_inner h6 {
        padding-bottom: 7px
    }

    .contact-page-block .contact-info .detail_info_wrap .detail-info {
        width: 50%;
        padding-right: 15px;
        padding-bottom: 30px
    }

    .contact-page-block .contact-info .detail_info_wrap .detail-info:after {
        display: none
    }

    .iframe-code.form_section {
        padding-left: 30px;
        padding-right: 30px
    }

    .form_section .container {
        padding: 3%;
        box-shadow: 0 3px 9px rgba(0,0,0,.1);
        margin: auto
    }

    .form_section .form-heading-block {
        padding-bottom: 10px
    }

    .form_section ul.top_label {
        padding-top: 40px
    }

    .form_section .ginput_container_radio li {
        display: flex;
        justify-content: flex-start;
        align-items: center
    }

    .form_section .ginput_container_radio li input {
        width: auto;
        margin-right: 5px;
        height: 30px
    }

    .form_section .gfield_label {
        color: #555;
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        display: block;
        margin-bottom: 9px
    }

    .form_section .gfield_required {
        margin-left: 5px;
        color: red
    }

    .form_section .gfield_checkbox li {
        display: flex;
        justify-content: flex-start;
        align-items: center
    }

    .form_section .gfield_checkbox li input {
        width: auto;
        margin-right: 5px;
        height: 30px
    }

    .form_section .textarea {
        resize: none
    }

    .form_section .field_description_below .ginput_container {
        padding-bottom: 0
    }

    .form_section .field_description_below .gfield_description {
        color: #6f6f6f;
        font-size: 12px;
        line-height: 14px
    }

    .form_section .gform_body ul li.gfield {
        margin-bottom: 20px
    }

    .form_section .gf_name_has_2 {
        display: flex;
        justify-content: space-between
    }

    .form_section .gf_name_has_2>span {
        width: 48%
    }

    .form_section .gform_button {
        border: 0;
        color: #fff;
        border-radius: 4px;
        background: #ff8d00;
        font-size: 18px;
        font-weight: 700;
        outline: 0!important;
        border-bottom: 4px solid #e77c00;
        transition: all 300ms;
        text-decoration: none;
        text-transform: none;
        margin: auto;
        height: 50px;
        box-sizing: border-box;
        display: flex;
        width: 260px;
        margin: initial;
        justify-content: center;
        line-height: 53px;
        margin: auto
    }

    .form_section .gform_button:hover {
        background: #f1860a
    }

    .form_section .gform_footer.top_label {
        margin-top: 20px
    }

    .form_section .instruction {
        display: none
    }

    .form_section .gfield_error input {
        border-bottom-color: red
    }

    .form_section .gfield_error textarea {
        border-bottom-color: red
    }

    .form_section .gfield_error select {
        border-bottom-color: red
    }

    .form_section .gfield_error .gfield_description.validation_message {
        color: red
    }

    .form_section .gfield_error .gfield_label {
        color: red
    }

    .ui-widget-header .ui-icon {
        background-image: url(//cleanzen.com/wp-content/themes/cleanzen/assets/styles/../images/ui-icons_444444_256x240.png)
    }

    .form_section .form_cleaners_references ul.top_label {
        padding-top: 0
    }

    .form_cleaners_references {
        padding-top: 50px
    }

    .form_cleaners_references .form_section_title {
        padding-top: 40px;
        padding-bottom: 30px
    }

    .form_section_title h2 {
        text-align: center;
        border-top: 2px solid gray;
        border-bottom: 2px solid gray;
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        font-size: 21px
    }

    .form_date_section {
        display: flex;
        justify-content: space-between
    }

    .form_date_section li {
        width: 50%;
        display: flex;
        align-items: center
    }

    .form_date_section .ginput_container_date {
        display: flex;
        align-items: center;
        position: relative
    }

    .form_date_section .ginput_container_date img {
        position: absolute;
        right: 10px;
        cursor: pointer
    }

    .form_date_section .screen-reader-text {
        display: none
    }

    .form_section .form_cleaners_references li.hr_line {
        margin: 0;
        padding-top: 40px;
        padding-bottom: 40px
    }

    .form_cleaners_references .hr_line hr {
        margin: 0;
        padding: 0
    }

    .author_info {
        background: #fff;
        padding: 30px
    }

    .author_avatar {
        padding-bottom: 15px;
        display: block
    }

    .author_avatar img {
        border-radius: 50%;
        object-fit: cover;
        width: 100%;
        height: 100%;
        max-width: 150px;
        display: block
    }

    .description_author {
        padding-bottom: 15px
    }

    .author_social {
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: flex-start
    }

    .author_social li {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-right: 7px
    }

    .author_social li a {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 300ms;
        width: 32px;
        height: 32px
    }

    .author_social li a svg {
        max-width: 100%;
        max-height: 100%
    }

    .author_social li a svg path {
        fill: #5c5c5c;
        transition: opacity 300ms
    }

    .author_social li a:hover path {
        opacity: .7
    }

    .logo_blog {
        width: 100%;
        max-width: 299px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        flex-wrap: nowrap;
        margin-right: 15px
    }

    .logo_blog a {
        display: flex;
        align-items: flex-end;
        justify-content: center
    }

    a.blog_lgb {
        margin-left: 10px
    }

    .detail-info-holder .detail-info a {
        color: #5c5c5c
    }

    .single_post .single_post_inner .image {
        padding-bottom: 15px;
        margin-bottom: 0
    }

    .single_post .single_post_inner .apss-social-share {
        margin-bottom: 25px
    }

    .social_inner .apss-single-icon a {
        position: relative;
        display: block;
        float: left;
        margin: 8px;
        margin-top: 8px;
        margin-left: 8px;
        color: #fff;
        min-height: auto;
        margin-left: 0;
        margin-top: 15px
    }

    .resent_post .image {
        height: auto
    }

    .resent_post .item .social_inner {
        padding: 15px 30px 0
    }

    .resent_post .content {
        padding-top: 15px
    }

    #gform_5_validation_container .gform_submission_error.hide_summary {
        color: #fff;
        font-weight: 400;
        border: 1px solid #fff;
        padding: 10px;
        line-height: 1;
        margin-bottom: 15px
    }

    .aside_form_wrap #gform_5_validation_container .gform_submission_error.hide_summary {
        font-size: 18px
    }

    .resent_post_wrap .form form .gform_footer input[type=submit] {
        height: 48px
    }

    .blog_aside .aside_form_wrap .form form .gform_footer input[type=submit] {
        height: 48px
    }

    .seo_content .link_btn a,.want_work_section .link_btn a {
        margin-left: 0;
        padding-top: 0
    }

    .links_404_list ul {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-top: 25px
    }

    .links_404_list ul li a {
        font-size: 24px
    }

    header .header-navigation ul .btn_transparent {
        padding: 0 5px
    }

    header .header-navigation ul li.btn_transparent a {
        border: 1px solid #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        padding: 0 5px;
        width: 100px;
        font-weight: 700;
        line-heiht: 15px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 40px
    }

    header .header-navigation .btn_transparent a:hover {
        background-color: rgba(255,255,255,.1);
        color: #fff
    }

    .header.page-header .btn_transparent a {
        border: 1px solid #000
    }

    .header.page-header .btn_transparent a:hover {
        background-color: rgba(0,0,0,.1);
        color: #000
    }

    .booking-form .gform_wrapper.gravity-theme div.gform_validation_errors {
        background: #fff;
        border: 1px solid #c02b0a;
        border-radius: 5px;
        box-shadow: none;
        margin-bottom: 12px
    }

    .gform_validation_errors {
        outline: 0
    }

    .gform_required_legend {
        display: none
    }

    .gfield-incrementer {
        border-radius: 4px
    }

    .gfield-incrementer select.gfield_select {
        border: 0
    }

    .gfield-incrementer select.gfield_select:focus {
        border: 0
    }

    .gform_wrapper.gravity-theme .gfield_error .ginput_container [aria-invalid=true] {
        border: 1px solid #d7d7d7;
        border-bottom-color: #c02b0a;
        border-bottom-width: 2px
    }

    .gform_wrapper.gravity-theme .gfield_error .ginput_container [aria-invalid=true]:focus {
        border-top-color: #a4a4a4;
        border-left-color: #a4a4a4;
        border-right-color: #a4a4a4
    }

    .gform_wrapper.gravity-theme div.ginput_container_address span {
        flex: 0 0 100%
    }

    .complete_quote_form div.gform_footer {
        justify-content: center
    }

    .ginput_container [aria-required=true] [aria-invalid=false] {
        border-bottom-color: green
    }

    .operating_hours {
        display: flex;
        width: 100%
    }

    .operating_hours .day {
        min-width: 80px;
        font-weight: 600
    }

    .operating_hours .hours {
        justify-content: flex-start
    }

    .form.form_single_post .gform_wrapper.gravity-theme .gform_footer {
        margin: 0;
        padding: 0
    }

    .form.form_single_post .gform_wrapper.gravity-theme .gform_footer input {
        margin-bottom: 19px
    }

    .aside_form_wrap .form gfield_error .gfield_validation_message,.form.form_single_post .gfield_error .gfield_validation_message {
        display: none
    }

    .aside_form_wrap .form .gform_validation_errors,.form.form_single_post .gform_validation_errors {
        display: none
    }

    .aside_form_wrap .form .gform_footer.top_label {
        margin-top: 0;
        padding-top: 0
    }

    .facebook_share {
        background: #3b5998;
        border: 2px solid #3b5998
    }

    .twitter_share {
        background: #1dcaff;
        border: 2px solid #1dcaff
    }

    .linkedin_share {
        background: #3f729b;
        border: 2px solid #3f729b
    }

    .social_share_links ul {
        margin: 0;
        padding: 0
    }

    .social_share_links ul li {
        list-style: none;
        display: flex
    }

    .social_share_links ul li a {
        display: flex;
        width: 48px;
        height: 48px;
        align-items: center;
        justify-content: center;
        transition: all 300ms
    }

    .social_share_links ul li a svg {
        width: 28px;
        height: 28px;
        display: block
    }

    .social_share_links ul li a svg path {
        fill: #fff;
        transition: fill 300ms
    }

    .social_share_links ul li a:hover {
        background: #fff
    }

    .social_share_links ul li a.facebook_share:hover svg path {
        fill: #3b5998
    }

    .social_share_links ul li a.twitter_share:hover svg path {
        fill: #1dcaff
    }

    .social_share_links ul li a.linkedin_share:hover svg path {
        fill: #3f729b
    }

    .social_inner .social_share_links ul {
        display: flex
    }

    .social_inner .social_share_links ul li {
        margin-right: 5px
    }

    .social_inner .social_share_links ul li:last-child {
        margin-right: 0
    }

    .social_inner .social_share_links ul li a {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border-width: 1px
    }

    .social_inner .social_share_links ul li a svg {
        width: 16px;
        height: 16px
    }

    .slider_post_wrap .social_inner {
        margin-top: 15px
    }

    .post_new .social_share_links ul li a {
        width: 32px;
        height: 32px;
        border: 0;
        background: 0 0
    }

    .post_new .social_share_links ul li a svg {
        width: 21px;
        height: 21px
    }

    .post_new .social_share_links ul li a svg path {
        fill: #5c5c5c
    }

    .heart_icon {
        width: 23px;
        height: 19px;
        margin-left: 10px;
        display: inline-block
    }

    .social-nav ul li a {
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 300ms
    }

    .social-nav li a svg {
        width: 21px;
        height: 21px
    }

    .social-nav li a svg path {
        fill: #303030
    }

    @media all and (min-width: 1024px) {
        .header-content .header-navigation.menu_city,.header-content .header-navigation {
            height:100%
        }

        .header .header-navigation>ul {
            height: 100%
        }

        .header .header-navigation>ul>li {
            height: 100%
        }

        .header .header-navigation>ul>li>a {
            display: flex;
            align-items: center;
            height: 100%
        }

        .header .header-navigation.menu_city>ul>li.menu-item-has-children>a:before,.header .header-navigation>ul>li.menu-item-has-children>a:before {
            top: auto;
            bottom: auto;
            margin-top: 3px
        }

        .header .header-navigation>ul>li .sub-menu:after {
            content: "";
            display: inline-block;
            position: absolute;
            top: -12px;
            left: 48%;
            border: 7px solid transparent;
            border-bottom: 5px solid #fff
        }

        .header .header-navigation.menu_city>ul>li .sub-menu {
            width: 140px;
            left: -50%
        }

        .header .header-navigation>ul>li .sub-menu {
            padding: 10px 0
        }

        .header .header-navigation>ul>li .sub-menu li {
            padding: 0
        }

        .header .header-navigation>ul>li .sub-menu li a {
            font-size: 13px;
            padding: 7px 0;
            display: inline-block;
            width: 100%;
            color: #5c5c5c;
            transition: all 300ms;
            padding-left: 20px;
            padding-right: 20px
        }

        .header .header-navigation>ul>li .sub-menu li a:hover {
            text-decoration: underline
        }

        .header .header-navigation>ul>li .sub-menu li a:hover {
            text-decoration: none;
            background-color: rgba(255,255,255,.1)
        }

        .header.page-header .header-navigation>ul>li .sub-menu {
            padding: 10px 0
        }

        .header.page-header .header-navigation>ul>li .sub-menu li a:hover {
            text-decoration: none;
            background: #f6f8ff
        }

        .header.page-header .header-navigation>ul>li .sub-menu {
            background: #fff
        }

        .header.page-header .header-navigation>ul>li .sub-menu li a {
            color: #5c5c5c;
            padding-left: 20px;
            padding-right: 20px
        }

        .header.page-header .header-navigation>ul>li .sub-menu:after {
            border-bottom-color: #fff
        }

        .header .header-navigation>ul>li .sub-menu {
            background: #5c5c5c;
            left: -50%
        }

        .header .header-navigation>ul>li:first-child .sub-menu {
            left: calc(-50% - 25px)
        }

        .header .header-navigation.menu_city>ul>li:first-child .sub-menu {
            left: -50%
        }

        .header .header-navigation>ul>li .sub-menu li a {
            color: #fff;
            text-align: center
        }

        .header .header-navigation>ul>li .sub-menu:after {
            border-bottom-color: #5c5c5c
        }
    }

    @media all and (max-width: 1023px) {
        .banner_logo {
            bottom:-46px;
            max-width: 100px
        }

        .header-content {
            background: #5c5c5c;
            z-index: 99
        }

        .related_posts {
            height: auto;
            padding-bottom: 70px
        }

        header.page-header.header_blog.small .search_block {
            margin-left: auto;
            margin-right: auto
        }

        .header_blog.small .search_block .form_search input:focus {
            width: 300px
        }

        .banner_post_new .banner_content .title {
            font-size: 26px;
            line-height: 1.5;
            font-weight: 700;
            text-align: center;
            padding-bottom: 15px
        }

        .banner_post_new .banner_content {
            max-width: 750px;
            padding-bottom: 25px
        }

        .blog_page.post_new .inner_content .resent_post_wrap {
            padding-left: 0
        }

        .blog_page.post_new .resent_post_wrap .social {
            top: 30px;
            left: 30px
        }

        .blog_page.post_new .resent_post_wrap .social .apss-social-share {
            flex-direction: row
        }

        .blog_page.post_new .resent_post_wrap .social .apss-social-share .apss-single-icon {
            margin-bottom: 0;
            margin-right: 25px
        }

        .blog_page.post_new .blog_aside {
            padding-top: 0;
            width: 100%
        }

        .different_tab_wrap .tab_title ul {
            justify-content: space-around
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content {
            margin-top: 50px
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item {
            margin-bottom: 50px;
            flex-direction: row
        }

        .main-footer .footer-info p,.main-footer .footer-info a {
            font-size: 10px;
            text-align: center
        }

        .header_transparent .header-navigation .sub-menu {
            background: 0 0
        }
    }

    @media all and (max-width: 978px) {
        .contact-page-block .detail-info-holder .holder .detail-info {
            width:100%;
            max-width: 100%;
            padding-bottom: 0;
            padding: 0
        }

        .contact-page-block .detail-info-holder .holder .detail_info_wrap .detail-info {
            padding: 0;
            width: 50%
        }

        .detail_info_wrap {
            width: 100%
        }

        .contact-page-block .detail-info-holder .holder {
            margin: 0
        }

        .contact-page-block .detail-info-holder {
            padding: 0 9px
        }

        .contact-page-block .contact-info-holder .form-contact {
            padding-top: 20px
        }

        .acf-map {
            width: 100%;
            height: 400px
        }

        .banner-text,.page-banner {
            min-height: 300px;
            box-sizing: border-box
        }

        .page-banner::after {
            min-height: 100%
        }

        .contact-page-block .contact-info-holder {
            display: flex;
            flex-direction: column;
            padding-left: 15px;
            padding-right: 15px
        }

        .contact-page-block .contact-info-holder>.col {
            width: 100%;
            padding-left: 0;
            padding-right: 0
        }

        .contact-page-block .detail-info-holder .holder {
            display: flex;
            flex-wrap: wrap
        }

        .form_section .gf_name_has_2 {
            flex-direction: column
        }

        .form_section .gf_name_has_2>span {
            width: 100%;
            padding-bottom: 18px
        }

        .form_section .gf_name_has_2>span:last-child {
            padding-bottom: 0
        }
    }

    @media all and (max-width: 768px) {
        .text_block ul {
            padding-left:5px
        }

        .map_block .item {
            width: 100%;
            display: flex
        }

        .map_block .item.map .map_frame {
            height: auto;
            display: flex;
            width: 100%
        }

        .seo_content .link_btn a,.want_work_section .link_btn a {
            margin-left: auto
        }

        .about-block .heading span {
            display: block
        }

        .faq-block .block .faq-heading {
            font-size: 28px;
            margin-bottom: 0
        }

        .seo_content .title h2 {
            font-size: 26px;
            line-height: 1.3
        }

        .faq-block .block {
            min-height: 300px;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .related_posts_wrap .item {
            width: 100%;
            max-height: 200px
        }

        .banner_post_new .banner_content {
            padding-left: 30px;
            padding-right: 30px
        }

        .banner_post_new .banner_content .category .post-categories {
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 15px
        }

        .banner_post_new .banner_content .category .post-categories li a {
            line-height: 18px;
            text-shadow: .5px .5px .5px rgba(0,0,0,.3)
        }

        .banner_post_new .banner_content .category .post-categories li a:after {
            display: none
        }

        .banner_post_new .banner_content .title h1 {
            font-size: 24px
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item {
            flex-direction: column
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text {
            width: 100%;
            padding-right: 0
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .item_image {
            width: 100%
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .tab_item:nth-child(2n) .item_text {
            order: 0;
            padding-left: 0;
            padding-right: 0
        }

        .contact-page-block .detail-info-holder .holder .detail-info {
            width: 100%;
            max-width: 100%
        }

        .form_date_section {
            flex-direction: column
        }

        .form_date_section li {
            width: 100%
        }

        body p,body li,.method_wrap .item p,.want_work_section .section .content .sub_title p,.popular_services p,.text_block_wrap .text_block p,.detail-info-holder .detail-info,.office-cleaning .want_work_section .section .content .sub_title p {
            font-size: 18px;
            line-height: 1.2
        }

        .different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_check li,.different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .list_info_del li,.different_tab_wrap .tab_wrap .tab_item .tab_content .item_text .other_services ul li {
            font-size: 16px;
            line-height: 1.2
        }

        .working-steps .step-wrap .step-icon {
            height: 60px;
            max-height: 60px
        }

        .working-steps .step-wrap .step-icon img {
            max-height: 100%
        }

        .single_post {
            padding: 15px
        }
    }

    @media all and (max-width: 500px) {
        .iframe-code .rplg-row-right {
            flex-direction:column;
            align-items: center
        }

        .reviews_slider,#brb_collection_4382 {
            padding-left: 35px;
            padding-right: 35px
        }

        .iframe-code .rplg .rplg-slider .rplg-slider-prev {
            left: -40px!important
        }

        .iframe-code .rplg .rplg-slider .rplg-slider-next {
            right: -40px!important
        }

        .iframe-code .rplg .rplg-biz-name a {
            font-size: 26px!important;
            line-height: 1!important
        }

        .iframe-code .rplg-grid .rplg-box {
            padding-bottom: 0!important
        }

        .link_btn a {
            min-width: 0;
            width: 100%;
            max-width: 260px
        }

        .detail_info_inner {
            width: 100%;
            padding-right: 0;
            padding-bottom: 15px
        }

        .contact-page-block .detail-info-holder .holder .detail_info_wrap .detail-info {
            width: 100%;
            padding-bottom: 15px
        }
    }

    @media all and (max-width: 420px) {
        .banner_post_new .banner_content .description_info {
            flex-wrap:wrap
        }

        .banner_post_new .banner_content .description_info p {
            font-size: 14px
        }

        .header_blog.small .logo_blog {
            max-width: 260px
        }

        .logo_blog {
            max-width: 260px
        }

        .header_blog.small .logo_blog a {
            display: flex;
            height: 100%
        }

        .banner_post_new .banner_content {
            padding-bottom: 5px
        }

        .banner_post_new .banner_content .title h1 {
            font-size: 20px;
            padding-bottom: 10px
        }

        .banner_post_new .banner_content .category .post-categories li a {
            font-size: 12px;
            line-height: 1.5
        }
    }
}

@media all {
    body.interview main#main {
        background: #cdf4ff
    }

    .frontpage-test .booking-form .validation_message {
        display: block
    }
}

@media all {
    .gform-theme--foundation {
        --gform-theme-form-row-gap: 40px;
        --gform-theme-form-col-gap: 16px;
        --gform-theme-field-row-gap: 12px;
        --gform-theme-field-col-gap: 12px;
        --gform-theme-label-horizontal-layout-width: 30%;
        --gform-theme-label-required-gap: 6px;
        --gform-theme-form-footer-margin-block-start: 24px;
        --gform-theme-form-footer-gap: 8px;
        --gform-theme-field-date-inline-size: 168px;
        --gform-theme-field-time-inline-size: 110px;
        --gform-theme-field-list-buttons-gap: 8px;
        --gform-theme-field-list-buttons-inline-size: calc(32px + var(--gform-theme-field-list-buttons-gap) + var(--gform-theme-field-col-gap));
        --gform-theme-field-page-steps-row-gap: 8px;
        --gform-theme-field-page-steps-col-gap: 24px
    }

    .gform-theme--foundation *,.gform-theme--foundation :after,.gform-theme--foundation :before {
        box-sizing: border-box
    }

    .gform-theme--foundation fieldset,.gform-theme--foundation legend {
        background: 0 0;
        padding: 0
    }

    .gform-theme--foundation fieldset {
        border: none;
        display: block;
        margin: 0
    }

    .gform-theme--foundation legend {
        margin-inline:0}

    .gform_anchor.focus-visible {
        outline: none
    }

    .gform_anchor:focus-visible {
        outline: none
    }

    .gform-theme--foundation .hidden_label .gfield_label,.gform-theme--foundation .hidden_sub_label,.gform-theme--foundation .screen-reader-text {
        clip: rect(1px,1px,1px,1px);
        word-wrap: normal!important;
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .gform-theme--foundation button.screen-reader-text:focus {
        clip: auto;
        border: 0;
        -webkit-clip-path: none;
        clip-path: none;
        height: auto;
        margin: 0;
        position: static!important;
        width: auto
    }

    .gform-theme--foundation .gform-ul-reset {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .gform-theme--foundation .gform-text-input-reset {
        background-color: transparent;
        border: none;
        border-radius: 0;
        box-shadow: none;
        color: currentColor;
        font-family: inherit;
        font-size: inherit;
        outline: none;
        padding: inherit;
        width: auto
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .left_label .gfield .gfield_creditcard_warning_message,.gform-theme--foundation .left_label .gfield .gfield_password_strength,.gform-theme--foundation .left_label .gfield>.ginput_container,.gform-theme--foundation .right_label .gfield .gfield_creditcard_warning_message,.gform-theme--foundation .right_label .gfield .gfield_password_strength,.gform-theme--foundation .right_label .gfield>.ginput_container {
            float:right
        }

        .rtl .gform-theme--foundation .left_label .gfield .gfield_creditcard_warning_message,.rtl .gform-theme--foundation .left_label .gfield .gfield_password_strength,.rtl .gform-theme--foundation .left_label .gfield>.ginput_container,.rtl .gform-theme--foundation .right_label .gfield .gfield_creditcard_warning_message,.rtl .gform-theme--foundation .right_label .gfield .gfield_password_strength,.rtl .gform-theme--foundation .right_label .gfield>.ginput_container {
            float: left
        }

        .gform-theme--foundation .left_label .gfield:where(:not(.gfield--type-html):not(.gfield--type-section))>div:where(:not(.ui-resizable-handle):not(.gfield-admin-icons):not(.gform-grid-row)),.gform-theme--foundation .left_label .gfield>.ginput_container:where(:not(.ui-resizable-handle):not(.gfield-admin-icons):not(.gform-grid-row)),.gform-theme--foundation .right_label .gfield:where(:not(.gfield--type-html):not(.gfield--type-section))>div:where(:not(.ui-resizable-handle):not(.gfield-admin-icons):not(.gform-grid-row)),.gform-theme--foundation .right_label .gfield>.ginput_container:where(:not(.ui-resizable-handle):not(.gfield-admin-icons):not(.gform-grid-row)) {
            inline-size: calc(100% - var(--gform-theme-label-horizontal-layout-width))
        }

        .gform-theme--foundation .left_label .gfield:where(:not(.gfield--type-html):not(.gfield--type-section))>div:where(.gform-grid-row),.gform-theme--foundation .left_label .gfield>.ginput_container:where(.gform-grid-row),.gform-theme--foundation .right_label .gfield:where(:not(.gfield--type-html):not(.gfield--type-section))>div:where(.gform-grid-row),.gform-theme--foundation .right_label .gfield>.ginput_container:where(.gform-grid-row) {
            inline-size: calc(100% - var(--gform-theme-label-horizontal-layout-width) + var(--gform-theme-field-col-gap))
        }

        .gform-theme--foundation .left_label .gfield_html_formatted,.gform-theme--foundation .right_label .gfield_html_formatted {
            -webkit-margin-start: var(--gform-theme-label-horizontal-layout-width);
            margin-inline-start:var(--gform-theme-label-horizontal-layout-width)}
    }

    .field_sublabel_below .ginput_complex {
        align-items: flex-start
    }

    .field_sublabel_above .ginput_complex {
        align-items: flex-end
    }

    .gform-theme--foundation .ginput_complex label,.gform-theme--foundation .ginput_complex legend {
        display: block
    }

    .gform-theme--foundation .gfield textarea,.gform-theme--foundation .ginput_complex input,.gform-theme--foundation .ginput_complex select {
        inline-size: 100%
    }

    .gform-theme--foundation .gfield textarea.small {
        min-block-size: 6rem
    }

    .gform-theme--foundation .gfield textarea.medium {
        min-block-size: 12rem
    }

    .gform-theme--foundation .gfield textarea.large {
        min-block-size: 18rem
    }

    .gform-theme--foundation .gfield .ginput_password,.gform-theme--foundation .gfield input,.gform-theme--foundation .gfield select {
        max-inline-size: 100%
    }

    .gform-theme--foundation .gfield .ginput_password.small,.gform-theme--foundation .gfield input.small,.gform-theme--foundation .gfield select.small {
        inline-size: calc(25% - var(--gform-theme-form-col-gap)*3/4)
    }

    .gform-theme--foundation .gfield .ginput_password.medium,.gform-theme--foundation .gfield input.medium,.gform-theme--foundation .gfield select.medium {
        inline-size: calc(50% - var(--gform-theme-form-col-gap)/2)
    }

    .gform-theme--foundation .gfield .ginput_password.large,.gform-theme--foundation .gfield input.large,.gform-theme--foundation .gfield select.large {
        inline-size: 100%
    }

    .gform-theme--foundation .gform_fields {
        grid-column-gap: 0;
        grid-row-gap: var(--gform-theme-form-row-gap);
        display: grid;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows: repeat(auto-fill,auto);
        inline-size: 100%
    }

    .gform-theme--foundation .gfield {
        grid-column: 1/-1;
        min-inline-size: 0
    }

    .gform-theme--foundation .gform_footer,.gform-theme--foundation .gform_page_footer {
        -webkit-margin-before: var(--gform-theme-form-footer-margin-block-start);
        display: flex;
        flex-wrap: wrap;
        gap: var(--gform-theme-form-footer-gap);
        margin-block-start:var(--gform-theme-form-footer-margin-block-start)}

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full,.gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-full,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-full {
        inline-size: 100%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-eleven-twelfths,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-eleven-twelfths {
        inline-size: 91.6666%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-five-sixths,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-five-sixths {
        inline-size: 83.3333%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-three-quarter,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-three-quarter {
        inline-size: 75%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-two-thirds,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-two-thirds {
        inline-size: 66.6666%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-seven-twelfths,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-seven-twelfths {
        inline-size: 58.3333%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-half,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-half {
        inline-size: 50%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-five-twelfths,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-five-twelfths {
        inline-size: 41.6666%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-third,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-third {
        inline-size: 33.3333%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-quarter,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-quarter {
        inline-size: 25%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-one-sixth,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-one-sixth {
        inline-size: 16.6666%
    }

    .gform-theme--foundation #field_submit input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-one-twelfth,.gform-theme--foundation .gform_footer input[type=submit][id*=gform_submit_button_].button.gform-button--width-full.gfield--width-one-twelfth {
        inline-size: 8.3333%
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .gform_fields {
            grid-column-gap:var(--gform-theme-form-col-gap)
        }

        .gform-theme--foundation .gfield--width-full {
            grid-column: span 12
        }

        .gform-theme--foundation .gfield--width-eleven-twelfths {
            grid-column: span 11
        }

        .gform-theme--foundation .gfield--width-five-sixths {
            grid-column: span 10
        }

        .gform-theme--foundation .gfield--width-three-quarter {
            grid-column: span 9
        }

        .gform-theme--foundation .gfield--width-two-thirds {
            grid-column: span 8
        }

        .gform-theme--foundation .gfield--width-seven-twelfths {
            grid-column: span 7
        }

        .gform-theme--foundation .gfield--width-half {
            grid-column: span 6
        }

        .gform-theme--foundation .gfield--width-five-twelfths {
            grid-column: span 5
        }

        .gform-theme--foundation .gfield--width-third {
            grid-column: span 4
        }

        .gform-theme--foundation .gfield--width-quarter {
            grid-column: span 3
        }

        .gform-theme--foundation .gfield--width-one-sixth {
            grid-column: span 2
        }

        .gform-theme--foundation .gfield--width-one-twelfth {
            grid-column: span 1
        }

        .gform-theme--foundation .gform_footer.left_label,.gform-theme--foundation .gform_footer.right_label {
            -webkit-padding-start: var(--gform-theme-label-horizontal-layout-width);
            padding-inline-start:var(--gform-theme-label-horizontal-layout-width)}
    }

    .gform-theme--foundation .gform-grid-row {
        display: flex;
        flex-flow: row wrap;
        margin-inline:calc(var(--gform-theme-field-col-gap)*-1/2);row-gap: var(--gform-theme-field-row-gap)
    }

    .gform-theme--foundation .gform-grid-col {
        flex: none;
        inline-size: 100%;
        padding-inline:calc(var(--gform-theme-field-col-gap)/2)}

    .gform-theme--foundation .gform-grid-col.gform-grid-row {
        inline-size: calc(100% + var(--gform-theme-field-col-gap))
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .gform-grid-col.gform-grid-col--size-auto {
            flex:1;
            inline-size: auto
        }
    }

    .gform-theme--foundation .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)) {
        align-items: baseline;
        display: flex;
        flex-wrap: wrap;
        gap: var(--gform-theme-label-required-gap)
    }

    .gform-theme--foundation .gform-field-label:where([class*=gform-field-label--type-]) {
        display: inline-block
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .left_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)),.gform-theme--foundation .right_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)) {
            flex-direction:column;
            float: left;
            gap: calc(var(--gform-theme-label-required-gap)/3);
            inline-size: var(--gform-theme-label-horizontal-layout-width)
        }

        .rtl .gform-theme--foundation .left_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)),.rtl .gform-theme--foundation .right_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)) {
            float: right
        }
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .right_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)) {
            align-items:end;
            justify-content: normal;
            text-align: end
        }
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .left_label .gfield_description,.gform-theme--foundation .right_label .gfield_description {
            clear:right;
            margin-left: auto
        }

        .rtl .gform-theme--foundation .left_label .gfield_description,.rtl .gform-theme--foundation .right_label .gfield_description {
            clear: left;
            margin-left: 0;
            margin-right: auto
        }
    }

    .gform-theme--foundation .gform_drop_area {
        background-color: #fff;
        border: 1px dashed #686e77;
        padding-block:32px;padding-inline:32px;text-align: center
    }

    .gform-theme--foundation .gform_drop_instructions,.gform-theme--foundation .gform_fileupload_rules {
        display: block
    }

    .gform-theme--foundation.ui-datepicker {
        background-color: #fff;
        box-shadow: 0 1px 5px rgba(0,0,0,.1);
        display: none;
        z-index: 9999!important
    }

    .gform-theme--foundation.ui-datepicker .ui-icon {
        -webkit-margin-before: -.25em;
        background-repeat: no-repeat;
        display: block;
        inset-block-start: .3em;
        inset-inline-start: .5em;
        margin-block-start:-.25em;overflow: hidden;
        position: relative;
        text-indent: -99999px;
        vertical-align: middle
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-header {
        padding-block:.2em;position: relative
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next,.gform-theme--foundation.ui-datepicker .ui-datepicker-prev {
        block-size: 1.8em;
        inline-size: 1.8em;
        inset-block-start: 2px;
        position: absolute
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next:before,.gform-theme--foundation.ui-datepicker .ui-datepicker-prev:before {
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/down-arrow.svg);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 24px 24px;
        block-size: 1em;
        content: "";
        display: inline-block;
        inline-size: 1em;
        inset-block-start: 50%;
        inset-inline-start: 50%;
        position: absolute;
        transform: translate(-50%,-50%) rotate(90deg)
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next span,.gform-theme--foundation.ui-datepicker .ui-datepicker-prev span {
        -webkit-margin-before: -8px;
        -webkit-margin-start: -8px;
        display: block;
        inset-block-start: 50%;
        inset-inline-start: 50%;
        margin-block-start:-8px;margin-inline-start:-8px;position: absolute
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next-hover,.gform-theme--foundation.ui-datepicker .ui-datepicker-prev-hover {
        inset-block-start: 1px
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-prev {
        inset-inline-start: 2px
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next {
        inset-inline-end: 2px
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next:before {
        transform: translate(-50%,-50%) rotate(-90deg)
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-prev-hover {
        inset-inline-start: 1px
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-next-hover {
        inset-inline-end: 1px
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-title {
        line-height: 1.8em;
        margin-inline:2.3em;text-align: center
    }

    .gform-theme--foundation.ui-datepicker .ui-datepicker-title select {
        font-size: 1em;
        margin-block:1px}

    .gform-theme--foundation.ui-datepicker select.ui-datepicker-month,.gform-theme--foundation.ui-datepicker select.ui-datepicker-year {
        -webkit-padding-end: 24px;
        background-color: transparent;
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/down-arrow.svg);
        background-position: 100% 50%;
        background-repeat: no-repeat;
        background-size: 24px;
        padding-inline-end:24px}

    .gform-theme--foundation.ui-datepicker table {
        -webkit-margin-after: .4em;
        border-collapse: collapse;
        font-size: .9em;
        inline-size: 100%;
        margin-block-end:.4em;table-layout: fixed
    }

    .gform-theme--foundation.ui-datepicker th {
        border: 0;
        font-weight: 700;
        padding-block:.7em;padding-inline:.3em;text-align: center
    }

    .gform-theme--foundation.ui-datepicker td {
        border: 0;
        padding: 1px
    }

    .gform-theme--foundation.ui-datepicker td a,.gform-theme--foundation.ui-datepicker td span {
        display: block;
        padding: .2em;
        text-align: center;
        text-decoration: none
    }

    .gform-theme--foundation.ui-datepicker.ui-datepicker-rtl {
        direction: rtl
    }

    .gform-theme--foundation.ui-datepicker.ui-datepicker-rtl .ui-datepicker-prev:before {
        transform: translate(50%,-50%) rotate(-90deg)
    }

    .gform-theme--foundation.ui-datepicker.ui-datepicker-rtl .ui-datepicker-next:before {
        transform: translate(50%,-50%) rotate(90deg)
    }

    .gform-theme--foundation.ui-datepicker.ui-datepicker-rtl select.ui-datepicker-month,.gform-theme--foundation.ui-datepicker.ui-datepicker-rtl select.ui-datepicker-year {
        background-position: 0 50%
    }

    .gform-theme--foundation .chosen-container {
        display: inline-block;
        font-size: 13px;
        position: relative;
        text-align: start;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        vertical-align: middle
    }

    .gform-theme--foundation .chosen-container * {
        box-sizing: border-box
    }

    .gform-theme--foundation .chosen-container a {
        cursor: pointer
    }

    .gform-theme--foundation .chosen-container .chosen-drop {
        -webkit-border-before: 0;
        clip: rect(0,0,0,0);
        background: #fff;
        border: 1px solid #aaa;
        border-block-start:0;box-shadow: 0 4px 5px rgba(0,0,0,.15);
        -webkit-clip-path: inset(100% 100%);
        clip-path: inset(100% 100%);
        inline-size: 100%;
        inset-block-start: 100%;
        position: absolute;
        z-index: 1010
    }

    .gform-theme--foundation .chosen-container.chosen-with-drop .chosen-drop {
        clip: auto;
        -webkit-clip-path: none;
        clip-path: none
    }

    .gform-theme--foundation .chosen-container .chosen-single .group-name,.gform-theme--foundation .chosen-container .search-choice .group-name {
        -webkit-margin-end: 4px;
        color: #999;
        font-weight: 400;
        margin-inline-end:4px;overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .gform-theme--foundation .chosen-container .chosen-single .group-name:after,.gform-theme--foundation .chosen-container .search-choice .group-name:after {
        -webkit-padding-start: 2px;
        content: ":";
        padding-inline-start:2px;vertical-align: top
    }

    .gform-theme--foundation .chosen-container-single .chosen-single {
        background: #fff linear-gradient(#fff 20%,#f6f6f6 50%,#eee 52%,#f4f4f4);
        background-clip: padding-box;
        block-size: 25px;
        border: 1px solid #aaa;
        border-radius: 5px;
        box-shadow: inset 0 0 3px #fff,0 1px 1px rgba(0,0,0,.1);
        color: #444;
        display: block;
        line-height: 24px;
        overflow: hidden;
        padding-block:0;padding-inline:8px 0;position: relative;
        text-decoration: none;
        white-space: nowrap
    }

    .gform-theme--foundation .chosen-container-single .chosen-single span {
        -webkit-margin-end: 26px;
        display: block;
        margin-inline-end:26px;overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .gform-theme--foundation .chosen-container-single .chosen-single abbr {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/chosen/chosen-sprite.png) -42px 1px no-repeat;
        block-size: 12px;
        display: block;
        font-size: 1px;
        inline-size: 12px;
        inset-block-start: 6px;
        inset-inline-end: 26px;
        position: absolute
    }

    .gform-theme--foundation .chosen-container-single .chosen-single abbr:hover {
        background-position: -42px -10px
    }

    .gform-theme--foundation .chosen-container-single .chosen-single div {
        block-size: 100%;
        display: block;
        inline-size: 18px;
        inset-block-start: 0;
        inset-inline-end: 0;
        position: absolute
    }

    .gform-theme--foundation .chosen-container-single .chosen-single div b {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/chosen/chosen-sprite.png) no-repeat 0 2px;
        block-size: 100%;
        display: block;
        inline-size: 100%
    }

    .gform-theme--foundation .chosen-container-single .chosen-default {
        color: #999
    }

    .gform-theme--foundation .chosen-container-single .chosen-single-with-deselect span {
        -webkit-margin-end: 38px;
        margin-inline-end:38px}

    .gform-theme--foundation .chosen-container-single.chosen-disabled .chosen-single abbr:hover {
        background-position: -42px -10px
    }

    .gform-theme--foundation .chosen-container-single .chosen-search {
        margin-block:0;margin-inline:0;padding-block:3px;padding-inline:4px;position: relative;
        white-space: nowrap;
        z-index: 1010
    }

    .gform-theme--foundation .chosen-container-single .chosen-search input[type=text] {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/chosen/chosen-sprite.png) no-repeat 100% -20px;
        block-size: auto;
        border: 1px solid #aaa;
        border-radius: 0;
        font-family: sans-serif;
        font-size: 1em;
        inline-size: 100%;
        line-height: normal;
        margin-block:1px;margin-inline:0;outline: 0;
        padding-block:4px;padding-inline:5px 20px}

    .gform-theme--foundation .chosen-container-single.chosen-container-single-nosearch .chosen-search {
        clip: rect(0,0,0,0);
        -webkit-clip-path: inset(100% 100%);
        clip-path: inset(100% 100%);
        position: absolute
    }

    .gform-theme--foundation .chosen-container-single .chosen-drop {
        -webkit-margin-before: -1px;
        background-clip: padding-box;
        border-end-end-radius: 4px;
        border-end-start-radius: 4px;
        border-start-end-radius: 0;
        border-start-start-radius: 0;
        margin-block-start:-1px}

    .gform-theme--foundation .chosen-container .chosen-results {
        -webkit-overflow-scrolling: touch;
        color: #444;
        margin-block:0 4px;margin-inline:0 4px;max-block-size: 240px;
        overflow-x: hidden;
        overflow-y: auto;
        padding-block:0;padding-inline:4px 0;position: relative
    }

    .gform-theme--foundation .chosen-container .chosen-results li {
        -webkit-touch-callout: none;
        word-wrap: break-word;
        display: none;
        line-height: 15px;
        list-style: none;
        margin-block:0;margin-inline:0;padding-block:5px;padding-inline:6px}

    .gform-theme--foundation .chosen-container .chosen-results li.active-result {
        cursor: pointer;
        display: list-item
    }

    .gform-theme--foundation .chosen-container .chosen-results li.disabled-result {
        color: #ccc;
        cursor: default;
        display: list-item
    }

    .gform-theme--foundation .chosen-container .chosen-results li.highlighted {
        background-color: #3875d7;
        background-image: linear-gradient(#3875d7 20%,#2a62bc 90%);
        color: #fff
    }

    .gform-theme--foundation .chosen-container .chosen-results li.no-results {
        background: #f4f4f4;
        color: #777;
        display: list-item
    }

    .gform-theme--foundation .chosen-container .chosen-results li.group-result {
        cursor: default;
        display: list-item;
        font-weight: 700
    }

    .gform-theme--foundation .chosen-container .chosen-results li.group-option {
        -webkit-padding-start: 15px;
        padding-inline-start:15px}

    .gform-theme--foundation .chosen-container .chosen-results li em {
        font-style: normal;
        text-decoration: underline
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices {
        background-color: #fff;
        background-image: linear-gradient(#eee 1%,#fff 15%);
        block-size: auto;
        border: 1px solid #aaa;
        cursor: text;
        inline-size: 100%;
        margin-block:0;margin-inline:0;overflow: hidden;
        padding-block:0;padding-inline:5px;position: relative
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li {
        float: left;
        list-style: none
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-field {
        margin-block:0;margin-inline:0;padding-block:0;padding-inline:0;white-space: nowrap
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-field input[type=text] {
        background: 0 0!important;
        block-size: 25px;
        border: 0!important;
        border-radius: 0;
        box-shadow: none;
        color: #999;
        font-family: sans-serif;
        font-size: 100%;
        inline-size: 25px;
        line-height: normal;
        margin-block:1px;margin-inline:0;outline: 0;
        padding-block:0;padding-inline:0}

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice {
        background-clip: padding-box;
        background-color: #eee;
        background-image: linear-gradient(#f4f4f4 20%,#f0f0f0 50%,#e8e8e8 52%,#eee);
        background-repeat: repeat-x;
        background-size: 100% 19px;
        border: 1px solid #aaa;
        border-radius: 3px;
        box-shadow: inset 0 0 2px #fff,0 1px 0 rgba(0,0,0,.05);
        color: #333;
        cursor: default;
        line-height: 13px;
        margin-block:3px;margin-inline:0 5px;max-inline-size: 100%;
        padding-block:3px;padding-inline:5px 20px;position: relative
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice span {
        word-wrap: break-word
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/chosen/chosen-sprite.png) -42px 1px no-repeat;
        block-size: 12px;
        display: block;
        font-size: 1px;
        inline-size: 12px;
        inset-block-start: 4px;
        inset-inline-end: 3px;
        position: absolute
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
        background-position: -42px -10px
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice-disabled {
        -webkit-padding-end: 5px;
        background-color: #e4e4e4;
        background-image: linear-gradient(#f4f4f4 20%,#f0f0f0 50%,#e8e8e8 52%,#eee);
        border: 1px solid #ccc;
        color: #666;
        padding-inline-end:5px}

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice-focus {
        background: #d4d4d4
    }

    .gform-theme--foundation .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close {
        background-position: -42px -10px
    }

    .gform-theme--foundation .chosen-container-multi .chosen-results {
        margin-block:0;margin-inline:0;padding-block:0;padding-inline:0}

    .gform-theme--foundation .chosen-container-multi .chosen-drop .result-selected {
        color: #ccc;
        cursor: default;
        display: list-item
    }

    .gform-theme--foundation .chosen-container-active .chosen-single {
        border: 1px solid #5897fb;
        box-shadow: 0 0 5px rgba(0,0,0,.3)
    }

    .gform-theme--foundation .chosen-container-active.chosen-with-drop .chosen-single {
        background-image: linear-gradient(#eee 20%,#fff 80%);
        border: 1px solid #aaa;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: inset 0 1px 0 #fff
    }

    .gform-theme--foundation .chosen-container-active.chosen-with-drop .chosen-single div {
        -webkit-border-start: none;
        background: 0 0;
        border-inline-start:none}

    .gform-theme--foundation .chosen-container-active.chosen-with-drop .chosen-single div b {
        background-position: -18px 2px
    }

    .gform-theme--foundation .chosen-container-active .chosen-choices {
        border: 1px solid #5897fb;
        box-shadow: 0 0 5px rgba(0,0,0,.3)
    }

    .gform-theme--foundation .chosen-container-active .chosen-choices li.search-field input[type=text] {
        color: #222
    }

    .gform-theme--foundation .chosen-disabled {
        cursor: default;
        opacity: .5!important
    }

    .gform-theme--foundation .chosen-disabled .chosen-choices .search-choice .search-choice-close,.gform-theme--foundation .chosen-disabled .chosen-single {
        cursor: default
    }

    .gform-theme--foundation .chosen-rtl {
        direction: rtl
    }

    .gform-theme--foundation .chosen-rtl .chosen-choices li {
        float: right
    }

    .gform-theme--foundation .chosen-rtl.chosen-container-single .chosen-single div b {
        background-position: 6px 2px
    }

    .gform-theme--foundation .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b {
        background-position: -12px 2px
    }

    .gform-theme--foundation .chosen-rtl .chosen-search input[type=text] {
        background-position: -30px -20px
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 1.5),only screen and (min-resolution:1.5dppx),only screen and (min-resolution:144dpi) {
        .gform-theme--foundation .chosen-container .chosen-results-scroll-down span,.gform-theme--foundation .chosen-container .chosen-results-scroll-up span,.gform-theme--foundation .chosen-container-multi .chosen-choices .search-choice .search-choice-close,.gform-theme--foundation .chosen-container-single .chosen-search input[type=text],.gform-theme--foundation .chosen-container-single .chosen-single abbr,.gform-theme--foundation .chosen-container-single .chosen-single div b,.gform-theme--foundation .chosen-rtl .chosen-search input[type=text] {
            background-image:url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/chosen/chosen-sprite@2x.png)!important;
            background-repeat: no-repeat!important;
            background-size: 52px 37px!important
        }
    }

    .gform-theme--foundation .gf_invisible,.gform-theme--foundation .gfield_visibility_hidden {
        inset-inline-start: -9999px;
        position: absolute;
        visibility: hidden
    }

    .gform-theme--foundation .gf_hide_charleft .charleft {
        display: none!important
    }

    .gform-theme--foundation .ginput_counter {
        color: #767676;
        font-size: .8em
    }

    .gform-theme--foundation .ginput_counter_tinymce {
        -webkit-border-before: 1px solid #dcdcde;
        border-block-start:1px solid #dcdcde;font-size: 12px;
        padding-block:2px;padding-inline:10px}

    @media(min-width: 640px) {
        .gform-theme--foundation .ginput_address_city,.gform-theme--foundation .ginput_address_country,.gform-theme--foundation .ginput_address_state,.gform-theme--foundation .ginput_address_zip {
            inline-size:50%
        }
    }

    .gform-theme--foundation .gform_card_icon_container {
        -webkit-margin-after: 8px;
        block-size: 32px;
        display: flex;
        margin-block-end:8px}

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon {
        -webkit-margin-end: .3rem;
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards.svg);
        background-repeat: no-repeat;
        block-size: 32px;
        inline-size: 40px;
        margin-inline-end:.3rem;text-indent: -9000px
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_amex {
        background-position: -167px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_discover {
        background-position: -221px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_mastercard {
        background-position: -275px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_visa {
        background-position: -59px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_jcb {
        background-position: -329px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_maestro {
        background-position: -5px 0
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_selected {
        position: relative
    }

    .gform-theme--foundation .gform_card_icon_container .gform_card_icon.gform_card_icon_selected:after {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards-check.svg) 50% no-repeat;
        block-size: 10px;
        content: "";
        display: block;
        inline-size: 13px;
        inset-block-end: 4px;
        inset-inline-end: 0;
        position: absolute
    }

    .gform-theme--foundation .ginput_cardinfo_left {
        display: flex;
        flex-direction: column
    }

    .gform-theme--foundation .ginput_cardinfo_left legend {
        float: left
    }

    .gform-theme--foundation .field_sublabel_below .ginput_cardinfo_left {
        flex-direction: column-reverse;
        justify-content: flex-end
    }

    .gform-theme--foundation .ginput_cardinfo_right {
        display: inline-flex;
        flex-flow: row wrap;
        justify-content: flex-start
    }

    .gform-theme--foundation .ginput_cardinfo_right label {
        inline-size: 100%
    }

    .gform-theme--foundation .ginput_card_security_code {
        flex: 1
    }

    .gform-theme--foundation .ginput_card_security_code_icon {
        -webkit-margin-start: .3em;
        align-self: center;
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards.svg);
        background-position: -382px;
        background-repeat: no-repeat;
        block-size: 32px;
        display: block;
        flex: none;
        inline-size: 40px;
        margin-inline-start:.3em}

    @media(min-width: 640px) {
        .gform-theme--foundation .ginput_card_expiration_month_container,.gform-theme--foundation .ginput_card_expiration_year_container,.gform-theme--foundation .ginput_cardinfo_left,.gform-theme--foundation .ginput_cardinfo_right {
            inline-size:50%
        }

        .gform-theme--foundation .ginput_cardinfo_right .ginput_card_security_code {
            flex: none;
            inline-size: 50%
        }
    }

    .gform-theme--foundation .ginput_complex .ginput_container_date {
        inline-size: var(--gform-theme-field-date-inline-size)
    }

    .gform-theme--foundation .ginput_complex .ginput_container_date label {
        display: block
    }

    .gform-theme--foundation .gf_hidden,.gform-theme--foundation .gform_hidden {
        display: none
    }

    .gform-theme--foundation .gform_validation_container {
        display: none!important
    }

    .gform-theme--foundation .ginput_container_list--columns .gfield_list_group_item:before {
        content: attr(data-label)
    }

    .gform-theme--foundation .gfield_list_header {
        display: none
    }

    .gform-theme--foundation .gfield_header_item {
        word-break: break-word
    }

    .gform-theme--foundation .gfield_list_group {
        -webkit-margin-after: var(--gform-theme-field-row-gap);
        margin-block-end:var(--gform-theme-field-row-gap)}

    .gform-theme--foundation .gfield_list_group: last-child {
        -webkit-margin-after:0;
        margin-block-end:0}

    .gform-theme--foundation .gfield_list_group_item+.gfield_list_group_item {
        -webkit-margin-before: 4px;
        margin-block-start:4px}

    .gform-theme--foundation .gfield_list_group_item input,.gform-theme--foundation .gfield_list_group_item select,.gform-theme--foundation .gfield_list_group_item textarea {
        inline-size: 100%
    }

    .gform-theme--foundation .gfield_header_item--icons,.gform-theme--foundation .gfield_list_icons {
        align-items: center;
        display: flex;
        gap: var(--gform-theme-field-list-buttons-gap)
    }

    .gform-theme--foundation .add_list_item,.gform-theme--foundation .delete_list_item {
        font-size: 12px;
        padding: 0
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .ginput_container_list--columns .gfield_list_group_item:before {
            content:none
        }

        .gform-theme--foundation .gfield_list_group,.gform-theme--foundation .gfield_list_header {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap
        }

        .gform-theme--foundation .gfield_header_item:where(:not(.gfield_header_item--icons)) {
            flex: 1 1 0
        }

        .gform-theme--foundation .gfield_list_group_item {
            flex: 1
        }

        .gform-theme--foundation .gfield_list_group_item+.gfield_list_group_item {
            -webkit-margin-before: 0;
            margin-block-start:0}

        .gform-theme--foundation .gfield_header_item--icons,.gform-theme--foundation .gfield_list_icons {
            flex: none;
            flex-wrap: wrap;
            inline-size: var(--gform-theme-field-list-buttons-inline-size);
            justify-content: center
        }
    }

    .gform-theme--foundation .gf_page_steps {
        display: flex;
        flex-wrap: wrap;
        gap: var(--gform-theme-field-page-steps-row-gap) var(--gform-theme-field-page-steps-col-gap)
    }

    .gform-theme--foundation .gf_step_active {
        font-weight: 500
    }

    .gform-theme--foundation .gform_show_password {
        inset-block-start: 50%;
        inset-inline-end: 12px;
        position: absolute;
        transform: translateY(-50%)
    }

    .gform-theme--foundation .password_input_container {
        display: block;
        position: relative
    }

    .gform-theme--foundation .ginput_password {
        display: block
    }

    .gform-theme--foundation .ginput_password input {
        inline-size: 100%
    }

    .gform-theme--foundation ::-ms-reveal {
        display: none
    }

    .gform-theme--foundation .gfield--type-captcha iframe {
        inline-size: 100%
    }

    .gform-theme--foundation .gfield_post_tags_hint {
        margin: 0
    }

    .gform-theme--foundation .ginput_complex .ginput_container_time {
        inline-size: var(--gform-theme-field-time-inline-size)
    }

    .gform-theme--foundation .hour_minute_colon {
        display: none
    }

    @media(min-width: 640px) {
        .gform-theme--foundation .gfield.gf_list_2col .gfield_checkbox,.gform-theme--foundation .gfield.gf_list_2col .gfield_radio {
            grid-column-gap:2rem;
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform-theme--foundation .gfield.gf_list_3col .gfield_checkbox,.gform-theme--foundation .gfield.gf_list_3col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform-theme--foundation .gfield.gf_list_4col .gfield_checkbox,.gform-theme--foundation .gfield.gf_list_4col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform-theme--foundation .gfield.gf_list_5col .gfield_checkbox,.gform-theme--foundation .gfield.gf_list_5col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(5,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform-theme--foundation .gfield.gf_list_inline .gfield_checkbox,.gform-theme--foundation .gfield.gf_list_inline .gfield_radio {
            display: block
        }

        .gform-theme--foundation .gfield.gf_list_inline .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_inline .gfield_radio .gchoice {
            -webkit-padding-after: var(--gform-theme-field-choice-spacing);
            -webkit-padding-end: 1rem;
            display: inline-grid;
            padding-block-end:var(--gform-theme-field-choice-spacing);padding-inline-end: 1rem
        }

        .gform-theme--foundation .gfield.gf_list_inline .gfield_checkbox .gchoice label,.gform-theme--foundation .gfield.gf_list_inline .gfield_radio .gchoice label {
            max-inline-size: none
        }

        .gform-theme--foundation .gf_list_2col_vertical .ginput_container .gfield_checkbox,.gform-theme--foundation .gf_list_2col_vertical .ginput_container .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 2;
            column-count: 2;
            display: block
        }

        .gform-theme--foundation .gf_list_2col_vertical .ginput_container .gfield_checkbox .gchoice,.gform-theme--foundation .gf_list_2col_vertical .ginput_container .gfield_radio .gchoice {
            -webkit-margin-after: var(--gform-theme-field-choice-spacing);
            display: grid;
            margin-block-end:var(--gform-theme-field-choice-spacing)}

        .gform-theme--foundation .gf_list_3col_vertical .gfield_checkbox,.gform-theme--foundation .gf_list_3col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 3;
            column-count: 3;
            display: block
        }

        .gform-theme--foundation .gf_list_4col_vertical .gfield_checkbox,.gform-theme--foundation .gf_list_4col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 4;
            column-count: 4;
            display: block
        }

        .gform-theme--foundation .gf_list_5col_vertical .gfield_checkbox,.gform-theme--foundation .gf_list_5col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 5;
            column-count: 5;
            display: block
        }

        .gform-theme--foundation .gfield.gf_list_height_25 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_25 .gfield_radio .gchoice {
            block-size: 25px
        }

        .gform-theme--foundation .gfield.gf_list_height_50 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_50 .gfield_radio .gchoice {
            block-size: 50px
        }

        .gform-theme--foundation .gfield.gf_list_height_75 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_75 .gfield_radio .gchoice {
            block-size: 75px
        }

        .gform-theme--foundation .gfield.gf_list_height_100 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_100 .gfield_radio .gchoice {
            block-size: 100px
        }

        .gform-theme--foundation .gfield.gf_list_height_125 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_125 .gfield_radio .gchoice {
            block-size: 125px
        }

        .gform-theme--foundation .gfield.gf_list_height_150 .gfield_checkbox .gchoice,.gform-theme--foundation .gfield.gf_list_height_150 .gfield_radio .gchoice {
            block-size: 150px
        }
    }

    .gform-theme--foundation .gf_hide_ampm .gfield_time_ampm {
        display: none!important
    }

    .gform-theme--foundation .gsection.gf_scroll_text {
        background-color: #fff;
        block-size: 15rem;
        border: 1px solid #ccc;
        overflow-x: hidden;
        overflow-y: scroll;
        padding: 2rem
    }

    .gform-theme--foundation .gsection.gf_scroll_text .gsection_title {
        -webkit-margin-before: 0;
        margin-block-start:0}

    .gform-theme--foundation .gfield.gfield_html.gf_alert_blue,.gform-theme--foundation .gfield.gfield_html.gf_alert_gray,.gform-theme--foundation .gfield.gfield_html.gf_alert_green,.gform-theme--foundation .gfield.gfield_html.gf_alert_red,.gform-theme--foundation .gfield.gfield_html.gf_alert_yellow {
        border-radius: 3px;
        margin-block:1.25rem!important;margin-inline:0!important;padding: 1.25rem!important
    }

    .gform-theme--foundation .gfield.gfield_html.gf_alert_green {
        background-color: #cbeca0;
        border: 1px solid #97b48a;
        color: #030;
        text-shadow: #dfb 1px 1px
    }

    .gform-theme--foundation .gfield.gfield_html.gf_alert_red {
        background-color: #faf2f5;
        border: 1px solid #cfadb3;
        color: #832525;
        text-shadow: #fff 1px 1px
    }

    .gform-theme--foundation .gfield.gfield_html.gf_alert_yellow {
        background-color: #fffbcc;
        border: 1px solid #e6db55;
        color: #222;
        text-shadow: #fcfaea 1px 1px
    }

    .gform-theme--foundation .gfield.gfield_html.gf_alert_gray {
        background-color: #eee;
        border: 1px solid #ccc;
        color: #424242;
        text-shadow: #fff 1px 1px
    }

    .gform-theme--foundation .gfield.gfield_html.gf_alert_blue {
        background-color: #d1e4f3;
        border: 1px solid #a7c2e7;
        color: #314475;
        text-shadow: #e0f1ff 1px 1px
    }

    .gform-theme--foundation .gf_simple_horizontal {
        inline-size: calc(100% - 16px);
        margin-block:0;margin-inline:auto}

    .gform-theme--foundation .gf_simple_horizontal .gform_body,.gform-theme--foundation .gf_simple_horizontal .gform_footer.top_label {
        display: table-cell;
        margin: 0;
        padding: 0;
        position: relative;
        vertical-align: middle
    }

    .gform-theme--foundation .gf_simple_horizontal .gform_body {
        inline-size: auto;
        max-inline-size: 75%
    }

    .gform-theme--foundation .gf_simple_horizontal .gform_body .top_label {
        display: table;
        inline-size: 100%
    }

    .gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield {
        -webkit-padding-end: 1em;
        block-size: auto;
        display: table-cell;
        padding-inline-end:1em}

    .gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield .large,.gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield .medium,.gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield .small {
        inline-size: 100%
    }

    .gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield .ginput_container_checkbox .gchoice,.gform-theme--foundation .gf_simple_horizontal .gform_body .top_label .gfield .ginput_container_radio .gchoice {
        -webkit-margin-end: .5em;
        display: inline-block;
        margin-inline-end:.5em}

    .gform-theme--foundation .gf_simple_horizontal .gform_body .top_label.form_sublabel_above .gfield,.gform-theme--foundation .gf_simple_horizontal .gform_body .top_label.form_sublabel_below .gfield {
        vertical-align: middle
    }

    .gform-theme--foundation .gf_simple_horizontal .gfield,.gform-theme--foundation .gf_simple_horizontal .ginput_container {
        -webkit-margin-before: 0!important;
        margin-block-start:0!important}

    .gform-theme--foundation .gf_simple_horizontal .gform_footer.top_label {
        inline-size: auto;
        margin: 0;
        max-inline-size: 25%;
        padding: 0;
        text-align: start
    }

    .gform-theme--foundation .gf_simple_horizontal .gform_footer.top_label input[type=button],.gform-theme--foundation .gf_simple_horizontal .gform_footer.top_label input[type=image],.gform-theme--foundation .gf_simple_horizontal .gform_footer.top_label input[type=submit] {
        block-size: auto
    }

    .gform-theme--foundation .gf_simple_horizontal .gfield_description:not(.gfield_validation_message),.gform-theme--foundation .gf_simple_horizontal .gfield_label,.gform-theme--foundation .gf_simple_horizontal .ginput_complex label {
        block-size: 1px;
        display: block;
        inline-size: 1px;
        inset-block-start: 0;
        inset-inline-start: -9000px;
        overflow: hidden;
        position: absolute
    }

    .gform_confirmation_wrapper.gf_confirmation_simple_yellow {
        background-color: #fffbcc;
        border-block:1px solid #e6db55;color: #424242;
        font-size: 25px;
        margin-block:30px;margin-inline:0;max-inline-size: 99%;
        padding: 32px
    }

    .gform_confirmation_wrapper.gf_confirmation_simple_gray {
        background-color: #eaeaea;
        border-block:1px solid #ccc;color: #424242;
        font-size: 25px;
        margin-block:30px;margin-inline:0;max-inline-size: 99%;
        padding: 32px
    }

    .gform_confirmation_wrapper.gf_confirmation_yellow_gradient {
        background-color: #fffbd2;
        border: 1px solid #e6db55;
        box-shadow: 0 0 5px hsla(56,57%,69%,.75);
        margin-block:30px;margin-inline:0;position: relative
    }

    .gform_confirmation_wrapper.gf_confirmation_yellow_gradient .gform_confirmation_message {
        -webkit-border-after: 1px solid #e6db55;
        -webkit-border-before: 2px solid #fff;
        background: #fffce5;
        background: linear-gradient(180deg,#fffce5 0,#fff9bf);
        background-color: #fffbcc;
        border-block-end:1px solid #e6db55;border-block-start:2px solid #fff;color: #424242;
        font-size: 28px;
        margin: 0;
        max-inline-size: 99%;
        padding: 40px
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient {
        background-color: #f1fcdf;
        border: 1px solid #a7c37c;
        box-shadow: 0 0 5px rgba(86,122,86,.4);
        margin-block:30px;margin-inline:0;position: relative
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient .gform_confirmation_message {
        -webkit-border-after: 1px solid #a7c37c;
        -webkit-border-before: 2px solid #effade;
        background: #dbf2b7;
        background: linear-gradient(180deg,#dbf2b7 0,#b4d088);
        background-color: #fffbcc;
        border-block-end:1px solid #a7c37c;border-block-start:2px solid #effade;color: #030;
        font-size: 28px;
        margin: 0;
        max-inline-size: 99%;
        padding: 40px;
        text-shadow: #dfb 1px 1px
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient:after,.gform_confirmation_wrapper.gf_confirmation_green_gradient:before,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:after,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:before {
        background: rgba(0,0,0,.2);
        box-shadow: 0 15px 10px rgba(0,0,0,.2);
        content: "";
        inline-size: 50%;
        inset-block: 80% 15px;
        inset-inline-start: 10px;
        max-inline-size: 40%;
        position: absolute;
        transform: rotate(-3deg);
        z-index: -1
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient:after,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:after {
        inset-inline: auto 10px;
        transform: rotate(3deg)
    }

    .gform-theme--foundation .validation_message--hidden-on-empty:empty {
        display: none
    }

    .gform-theme--foundation .gform-loader {
        -webkit-border-after: 1.1em solid #000;
        -webkit-border-before: 1.1em solid #fff;
        -webkit-border-end: 1.1em solid #fff;
        -webkit-border-start: 1.1em solid #000;
        align-self: center;
        animation: gformLoader 1.1s linear infinite;
        block-size: 10em;
        border-block-end:1.1em solid #000;border-block-start:1.1em solid #fff;border-inline-end:1.1em solid #fff;border-inline-start:1.1em solid #000;border-radius: 50%;
        display: inline-block;
        font-size: 2px;
        inline-size: 10em;
        position: relative;
        transform: translateZ(0)
    }

    @keyframes gformLoader {
        0% {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(1turn)
        }
    }
}

@media all {
    .gform-theme--framework :where(:not(html):not(iframe):not(canvas):not(img):not(svg):not(video) :not(svg *):not(symbol *) :not(.gform-theme__no-reset--el):not(.gform-theme__no-reset--children *):not(.gform_heading *):not(.gfield--type-html *):not(.gfield--type-section *):not(.form_saved_message>*):not(.wp-editor-container):not(.mce-tinymce):not(.mce-tinymce *):not(.wp-editor-area)) {
        all: unset;
        display: revert
    }

    .gform-theme--framework *,.gform-theme--framework :after,.gform-theme--framework :before {
        box-sizing: border-box
    }

    .gform-theme--framework a,.gform-theme--framework button {
        cursor: revert
    }

    .gform-theme--framework menu,.gform-theme--framework ol,.gform-theme--framework ul {
        list-style: none
    }

    .gform-theme--framework img {
        max-width: 100%
    }

    .gform-theme--framework table {
        border-collapse: collapse
    }

    .gform-theme--framework textarea {
        white-space: revert
    }

    .gform-theme--framework meter {
        -webkit-appearance: revert;
        -moz-appearance: revert;
        appearance: revert
    }

    .gform-theme--framework ::-moz-placeholder {
        color: unset
    }

    .gform-theme--framework ::placeholder {
        color: unset
    }

    .gform-theme--framework :where([hidden]) {
        display: none
    }

    .gform-theme--framework :where([contenteditable]) {
        -moz-user-modify: read-write;
        -webkit-user-modify: read-write;
        word-wrap: break-word;
        -webkit-line-break: after-white-space
    }

    .gform-theme--framework :where([draggable=true]) {
        -webkit-user-drag: element
    }

    .gform-theme--framework input[type=checkbox]:before,.gform-theme--framework input[type=radio]:before {
        height: auto;
        margin-block:0;margin-inline:0;position: static;
        width: auto
    }

    .gform-theme--framework input[type=checkbox]:after,.gform-theme--framework input[type=radio]:after {
        content: none
    }
}

@media all {
    .gform-theme--framework {
        --gform-theme-font-family: initial;
        --gform-theme-font-style-base: normal;
        --gform-theme-border-radius: 3px;
        --gform-theme-border-radius-max-sm: 2px;
        --gform-theme-border-radius-max-md: 3px;
        --gform-theme-border-radius-max-lg: 8px;
        --gform-theme-transition-duration: 0.15s;
        --gform-theme-transition-control: var(--gform-theme-transition-duration);
        --gform-theme-color-primary: #204ce5;
        --gform-theme-color-primary-rgb: 45,127,251;
        --gform-theme-color-primary-contrast: #fff;
        --gform-theme-color-primary-contrast-rgb: 255,255,255;
        --gform-theme-color-primary-darker: #044ad3;
        --gform-theme-color-primary-lighter: #044ad3;
        --gform-theme-color-secondary: #fff;
        --gform-theme-color-secondary-rgb: 255,255,255;
        --gform-theme-color-secondary-contrast: #112337;
        --gform-theme-color-secondary-contrast-rgb: 17,35,55;
        --gform-theme-color-secondary-darker: #f2f3f5;
        --gform-theme-color-secondary-lighter: #f2f3f5;
        --gform-theme-color-outside-control-dark: #585e6a;
        --gform-theme-color-outside-control-dark-rgb: 88,94,106;
        --gform-theme-color-outside-control-dark-darker: #112337;
        --gform-theme-color-outside-control-dark-lighter: #686e77;
        --gform-theme-color-outside-control-light: #e5e7eb;
        --gform-theme-color-outside-control-light-rgb: 229,231,235;
        --gform-theme-color-outside-control-light-darker: #d2d5db;
        --gform-theme-color-outside-control-light-lighter: #f2f3f5;
        --gform-theme-color-inside-control: #fff;
        --gform-theme-color-inside-control-rgb: 255,255,255;
        --gform-theme-color-inside-control-contrast: #112337;
        --gform-theme-color-inside-control-contrast-rgb: 17,35,55;
        --gform-theme-color-inside-control-darker: #f2f3f5;
        --gform-theme-color-inside-control-lighter: #f2f3f5;
        --gform-theme-color-inside-control-dark: #585e6a;
        --gform-theme-color-inside-control-dark-rgb: 88,94,106;
        --gform-theme-color-inside-control-dark-darker: #112337;
        --gform-theme-color-inside-control-dark-lighter: #686e77;
        --gform-theme-color-inside-control-light: #e5e7eb;
        --gform-theme-color-inside-control-light-rgb: 229,231,235;
        --gform-theme-color-inside-control-light-darker: #d2d5db;
        --gform-theme-color-inside-control-light-lighter: #f2f3f5;
        --gform-theme-color-danger: #c02b0a;
        --gform-theme-color-danger-rgb: 192,43,10;
        --gform-theme-color-danger-contrast: #fff;
        --gform-theme-color-danger-contrast-rgb: 255,255,255;
        --gform-theme-color-success: #399f4b;
        --gform-theme-color-success-rgb: 57,159,75;
        --gform-theme-color-success-contrast: #fff;
        --gform-theme-color-success-contrast-rgb: 255,255,255;
        --gform-theme-color-primary-shade: var(--gform-theme-color-primary-darker);
        --gform-theme-color-secondary-shade: var(--gform-theme-color-secondary-darker);
        --gform-theme-color-light: var(--gform-theme-color-outside-control-light);
        --gform-theme-color-light-shade: var(--gform-theme-color-inside-control-light-darker);
        --gform-theme-color-light-tint: var(--gform-theme-color-inside-control-light-lighter);
        --gform-theme-color-dark: var(--gform-theme-color-outside-control-dark);
        --gform-theme-color-dark-rgb: var(--gform-theme-color-outside-control-dark-rgb);
        --gform-theme-color-dark-shade: var(--gform-theme-color-inside-control-dark-darker);
        --gform-theme-color-dark-tint: var(--gform-theme-color-inside-control-dark-lighter);
        --gform-theme-padding-inline: 12px;
        --gform-theme-padding-block: 12px;
        --gform-theme-font-family-primary: var(--gform-theme-font-family);
        --gform-theme-font-size-primary: 14px;
        --gform-theme-font-style-primary: var(--gform-theme-font-style-base);
        --gform-theme-font-weight-primary: 400;
        --gform-theme-letter-spacing-primary: 0;
        --gform-theme-line-height-primary: 1.5;
        --gform-theme-font-family-secondary: var(--gform-theme-font-family);
        --gform-theme-font-size-secondary: 14px;
        --gform-theme-font-style-secondary: var(--gform-theme-font-style-base);
        --gform-theme-font-weight-secondary: 500;
        --gform-theme-letter-spacing-secondary: 0;
        --gform-theme-line-height-secondary: 1.43;
        --gform-theme-font-family-tertiary: var(--gform-theme-font-family);
        --gform-theme-font-size-tertiary: 14px;
        --gform-theme-font-style-tertiary: var(--gform-theme-font-style-base);
        --gform-theme-font-weight-tertiary: 400;
        --gform-theme-letter-spacing-tertiary: 0;
        --gform-theme-line-height-tertiary: 1.43;
        --gform-theme-icon-font-family: "gform-icons-orbital";
        --gform-theme-icon-font-size: 20px;
        --gform-theme-icon-control-checkbox: "\e900";
        --gform-theme-icon-control-select-down: "\e901";
        --gform-theme-icon-control-select-up: "\e902";
        --gform-theme-icon-control-select: url("data:image/svg+xml;charset=utf-8,%3Csvg width='10' height='6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M.293.293a1 1 0 0 1 1.414 0L5 3.586 8.293.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414Z' fill='%23686E77'/%3E%3C/svg%3E");
        --gform-theme-icon-control-number: url("data:image/svg+xml;charset=utf-8,%3Csvg width='8' height='14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 0a1 1 0 0 1 .707.293l3 3a1 1 0 0 1-1.414 1.414L4 2.414 1.707 4.707A1 1 0 0 1 .293 3.293l3-3A1 1 0 0 1 4 0ZM.293 9.293a1 1 0 0 1 1.414 0L4 11.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414Z' fill='%23686E77'/%3E%3C/svg%3E");
        --gform-theme-icon-control-search: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='640' height='640'%3E%3Cpath d='M256 128c-70.692 0-128 57.308-128 128 0 70.691 57.308 128 128 128 70.691 0 128-57.309 128-128 0-70.692-57.309-128-128-128zM64 256c0-106.039 85.961-192 192-192s192 85.961 192 192c0 41.466-13.146 79.863-35.498 111.248l154.125 154.125c12.496 12.496 12.496 32.758 0 45.254s-32.758 12.496-45.254 0L367.248 412.502C335.862 434.854 297.467 448 256 448c-106.039 0-192-85.962-192-192z' fill='%23686E77'/%3E%3C/svg%3E");
        --gform-theme-icon-control-password-hidden: "\e90a";
        --gform-theme-icon-control-password-visible: "\e909";
        --gform-theme-icon-control-list-item-add: "\e90f";
        --gform-theme-icon-control-list-item-remove: "\e90e";
        --gform-theme-icon-control-save-continue: "\e910";
        --gform-theme-icon-control-page-numbers-complete: "\e90b";
        --gform-theme-icon-control-cancel: "\e918";
        --gform-theme-icon-control-file-upload: "\e911";
        --gform-theme-icon-control-file-upload-completed: "\e90c";
        --gform-theme-icon-control-file-upload-cancel: "\e904";
        --gform-theme-icon-control-file-upload-remove: "\e919";
        --gform-theme-icon-tooltip-error: "\e906";
        --gform-theme-icon-control-datepicker: "\e91a";
        --gform-theme-icon-control-datepicker-left: "\e91b";
        --gform-theme-icon-control-datepicker-right: "\e91c";
        --gform-theme-label-spacing-primary: 8px;
        --gform-theme-label-choice-field-spacing-primary: 12px;
        --gform-theme-label-spacing-horizontal-secondary: 12px;
        --gform-theme-label-spacing-vertical-sm-secondary: -1px;
        --gform-theme-label-spacing-vertical-md-secondary: 0;
        --gform-theme-label-spacing-vertical-lg-secondary: 1px;
        --gform-theme-label-spacing-vertical-xl-secondary: 4px;
        --gform-theme-label-spacing-vertical-secondary: var(--gform-theme-label-spacing-vertical-md-secondary);
        --gform-theme-label-spacing-tertiary: 8px;
        --gform-theme-description-spacing: 8px;
        --gform-theme-description-choice-field-spacing: 12px;
        --gform-theme-control-accent-color: var(--gform-theme-color-primary);
        --gform-theme-control-appearance: none;
        --gform-theme-control-background-color: var(--gform-theme-color-inside-control);
        --gform-theme-control-background-color-hover: var(--gform-theme-control-background-color);
        --gform-theme-control-background-color-focus: var(--gform-theme-control-background-color);
        --gform-theme-control-background-color-disabled: var(--gform-theme-color-inside-control-light-lighter);
        --gform-theme-control-background-color-error: var(--gform-theme-control-background-color);
        --gform-theme-control-border-color: var(--gform-theme-color-inside-control-dark-lighter);
        --gform-theme-control-border-color-hover: var(--gform-theme-control-border-color);
        --gform-theme-control-border-color-focus: var(--gform-theme-color-primary);
        --gform-theme-control-border-color-disabled: var(--gform-theme-color-inside-control-light-darker);
        --gform-theme-control-border-color-error: var(--gform-theme-color-danger);
        --gform-theme-control-border-style: solid;
        --gform-theme-control-border-width: 1px;
        --gform-theme-control-border-radius: var(--gform-theme-border-radius);
        --gform-theme-control-border-radius-max-sm: min(var(--gform-theme-control-border-radius),var(--gform-theme-border-radius-max-sm));
        --gform-theme-control-border-radius-max-md: min(var(--gform-theme-control-border-radius),var(--gform-theme-border-radius-max-md));
        --gform-theme-control-border-radius-max-lg: min(var(--gform-theme-control-border-radius),var(--gform-theme-border-radius-max-lg));
        --gform-theme-control-box-shadow: 0 1px 4px rgba(18,25,97,.078);
        --gform-theme-control-box-shadow-color-focus: rgba(var(--gform-theme-color-primary-rgb),0.3);
        --gform-theme-control-box-shadow-size-focus: 3px;
        --gform-theme-control-box-shadow-offset-color-focus: transparent;
        --gform-theme-control-box-shadow-offset-size-focus: 0;
        --gform-theme-control-box-shadow-focus: 0 0 0 var(--gform-theme-control-box-shadow-offset-size-focus) var(--gform-theme-control-box-shadow-offset-color-focus),0 0 0 var(--gform-theme-control-box-shadow-size-focus) var(--gform-theme-control-box-shadow-color-focus);
        --gform-theme-control-color: var(--gform-theme-color-inside-control-contrast);
        --gform-theme-control-color-hover: var(--gform-theme-control-color);
        --gform-theme-control-color-focus: var(--gform-theme-control-color);
        --gform-theme-control-color-disabled: rgba(var(--gform-theme-color-inside-control-contrast-rgb),0.6);
        --gform-theme-control-color-error: var(--gform-theme-control-color);
        --gform-theme-control-icon-color: var(--gform-theme-color-inside-control-dark-lighter);
        --gform-theme-control-icon-color-hover: var(--gform-theme-color-inside-control-dark-darker);
        --gform-theme-control-icon-color-focus: var(--gform-theme-control-icon-color-hover);
        --gform-theme-control-icon-color-disabled: var(--gform-theme-control-icon-color);
        --gform-theme-control-size-sm: 35px;
        --gform-theme-control-size-md: 38px;
        --gform-theme-control-size-lg: 47px;
        --gform-theme-control-size-xl: 54px;
        --gform-theme-control-size: var(--gform-theme-control-size-md);
        --gform-theme-control-padding-inline: var(--gform-theme-padding-inline);
        --gform-theme-control-padding-block: 0;
        --gform-theme-control-font-family: var(--gform-theme-font-family-primary);
        --gform-theme-control-font-size: var(--gform-theme-font-size-primary);
        --gform-theme-control-font-style: var(--gform-theme-font-style-base);
        --gform-theme-control-font-weight: var(--gform-theme-font-weight-primary);
        --gform-theme-control-letter-spacing: var(--gform-theme-letter-spacing-primary);
        --gform-theme-control-line-height: var(--gform-theme-control-size);
        --gform-theme-control-outline: none;
        --gform-theme-control-outline-offset: 0;
        --gform-theme-control-transition: var(--gform-theme-transition-control);
        --gform-theme-control-placeholder-color: rgba(var(--gform-theme-color-inside-control-contrast-rgb),0.7);
        --gform-theme-control-placeholder-font-family: var(--gform-theme-control-font-family);
        --gform-theme-control-placeholder-font-size: var(--gform-theme-control-font-size);
        --gform-theme-control-placeholder-font-style: var(--gform-theme-control-font-style);
        --gform-theme-control-placeholder-font-weight: var(--gform-theme-control-font-weight);
        --gform-theme-control-placeholder-letter-spacing: var(--gform-theme-control-letter-spacing);
        --gform-theme-control-placeholder-opacity: 1;
        --gform-theme-control-readonly-color: var(--gform-theme-control-color);
        --gform-theme-control-readonly-font-family: var(--gform-theme-control-font-family);
        --gform-theme-control-readonly-font-size: var(--gform-theme-control-font-size);
        --gform-theme-control-readonly-font-style: var(--gform-theme-control-font-style);
        --gform-theme-control-readonly-font-weight: 500;
        --gform-theme-control-readonly-letter-spacing: var(--gform-theme-control-letter-spacing);
        --gform-theme-control-readonly-line-height: 1;
        --gform-theme-control-button-border-radius: var(--gform-theme-border-radius);
        --gform-theme-control-button-box-shadow: 0 1px 4px rgba(18,25,97,.078);
        --gform-theme-control-button-box-shadow-hover: var(--gform-theme-control-button-box-shadow);
        --gform-theme-control-button-box-shadow-focus: var(--gform-theme-control-box-shadow-focus);
        --gform-theme-control-button-box-shadow-disabled: var(--gform-theme-control-button-box-shadow);
        --gform-theme-control-button-font-family: var(--gform-theme-font-family);
        --gform-theme-control-button-font-size-xs: 12px;
        --gform-theme-control-button-font-size-sm: 14px;
        --gform-theme-control-button-font-size-md: 14px;
        --gform-theme-control-button-font-size-lg: 16px;
        --gform-theme-control-button-font-size-xl: 16px;
        --gform-theme-control-button-font-size: var(--gform-theme-control-button-font-size-md);
        --gform-theme-control-button-font-style: var(--gform-theme-font-style-base);
        --gform-theme-control-button-font-weight: 500;
        --gform-theme-control-button-letter-spacing: var(--gform-theme-letter-spacing-primary);
        --gform-theme-control-button-line-height: 1;
        --gform-theme-control-button-opacity: 1;
        --gform-theme-control-button-opacity-disabled: 0.5;
        --gform-theme-control-button-padding-block: 0;
        --gform-theme-control-button-padding-inline-xs: 8px;
        --gform-theme-control-button-padding-inline-sm: 12px;
        --gform-theme-control-button-padding-inline-md: 16px;
        --gform-theme-control-button-padding-inline-lg: 20px;
        --gform-theme-control-button-padding-inline-xl: 24px;
        --gform-theme-control-button-padding-inline: var(--gform-theme-control-button-padding-inline-md);
        --gform-theme-control-button-size-xs: 30px;
        --gform-theme-control-button-size-sm: var(--gform-theme-control-size-sm);
        --gform-theme-control-button-size-md: var(--gform-theme-control-size-md);
        --gform-theme-control-button-size-lg: var(--gform-theme-control-size-lg);
        --gform-theme-control-button-size-xl: var(--gform-theme-control-size-xl);
        --gform-theme-control-button-size: var(--gform-theme-control-button-size-md);
        --gform-theme-control-button-text-decoration: none;
        --gform-theme-control-button-text-transform: none;
        --gform-theme-control-button-icon: none;
        --gform-theme-control-button-icon-font-size: var(--gform-theme-icon-font-size);
        --gform-theme-control-button-icon-gap: 6px;
        --gform-theme-control-button-transition: var(--gform-theme-control-transition);
        --gform-theme-control-button-background-color-primary: var(--gform-theme-color-primary);
        --gform-theme-control-button-background-color-hover-primary: var(--gform-theme-color-primary-darker);
        --gform-theme-control-button-background-color-focus-primary: var(--gform-theme-control-button-background-color-primary);
        --gform-theme-control-button-background-color-disabled-primary: var(--gform-theme-control-button-background-color-primary);
        --gform-theme-control-button-border-color-primary: transparent;
        --gform-theme-control-button-border-color-hover-primary: transparent;
        --gform-theme-control-button-border-color-focus-primary: var(--gform-theme-control-button-background-color-hover-primary);
        --gform-theme-control-button-border-color-disabled-primary: transparent;
        --gform-theme-control-button-border-style-primary: solid;
        --gform-theme-control-button-border-width-primary: 1px;
        --gform-theme-control-button-color-primary: var(--gform-theme-color-primary-contrast);
        --gform-theme-control-button-color-hover-primary: var(--gform-theme-control-button-color-primary);
        --gform-theme-control-button-color-focus-primary: var(--gform-theme-control-button-color-primary);
        --gform-theme-control-button-color-disabled-primary: var(--gform-theme-control-button-color-primary);
        --gform-theme-control-button-icon-color-primary: var(--gform-theme-control-button-color-primary);
        --gform-theme-control-button-icon-color-hover-primary: var(--gform-theme-control-button-icon-color-primary);
        --gform-theme-control-button-icon-color-focus-primary: var(--gform-theme-control-button-icon-color-primary);
        --gform-theme-control-button-icon-color-disabled-primary: var(--gform-theme-control-button-icon-color-primary);
        --gform-theme-control-button-background-color-secondary: var(--gform-theme-color-secondary);
        --gform-theme-control-button-background-color-hover-secondary: var(--gform-theme-color-secondary-darker);
        --gform-theme-control-button-background-color-focus-secondary: var(--gform-theme-control-button-background-color-secondary);
        --gform-theme-control-button-background-color-disabled-secondary: var(--gform-theme-control-button-background-color-secondary);
        --gform-theme-control-button-border-color-secondary: var(--gform-theme-color-inside-control-light-darker);
        --gform-theme-control-button-border-color-hover-secondary: var(--gform-theme-control-button-border-color-secondary);
        --gform-theme-control-button-border-color-focus-secondary: var(--gform-theme-control-button-background-color-hover-primary);
        --gform-theme-control-button-border-color-disabled-secondary: var(--gform-theme-control-button-border-color-secondary);
        --gform-theme-control-button-border-style-secondary: solid;
        --gform-theme-control-button-border-width-secondary: 1px;
        --gform-theme-control-button-color-secondary: var(--gform-theme-color-secondary-contrast);
        --gform-theme-control-button-color-hover-secondary: var(--gform-theme-control-button-color-secondary);
        --gform-theme-control-button-color-focus-secondary: var(--gform-theme-control-button-color-secondary);
        --gform-theme-control-button-color-disabled-secondary: var(--gform-theme-control-button-color-secondary);
        --gform-theme-control-button-icon-color-secondary: var(--gform-theme-control-icon-color);
        --gform-theme-control-button-icon-color-hover-secondary: var(--gform-theme-control-button-icon-color-secondary);
        --gform-theme-control-button-icon-color-focus-secondary: var(--gform-theme-control-button-icon-color-secondary);
        --gform-theme-control-button-icon-color-disabled-secondary: var(--gform-theme-control-button-icon-color-secondary);
        --gform-theme-control-button-background-color-simple: transparent;
        --gform-theme-control-button-background-color-hover-simple: var(--gform-theme-control-button-background-color-simple);
        --gform-theme-control-button-background-color-focus-simple: var(--gform-theme-control-button-background-color-simple);
        --gform-theme-control-button-background-color-disabled-simple: var(--gform-theme-control-button-background-color-simple);
        --gform-theme-control-button-border-color-simple: transparent;
        --gform-theme-control-button-border-color-hover-simple: var(--gform-theme-control-button-border-color-simple);
        --gform-theme-control-button-border-color-focus-simple: var(--gform-theme-control-border-color-focus);
        --gform-theme-control-button-border-color-disabled-simple: var(--gform-theme-control-button-border-color-simple);
        --gform-theme-control-button-border-style-simple: solid;
        --gform-theme-control-button-border-width-simple: 1px;
        --gform-theme-control-button-box-shadow-simple: none;
        --gform-theme-control-button-box-shadow-hover-simple: var(--gform-theme-control-button-box-shadow-simple);
        --gform-theme-control-button-box-shadow-focus-simple: var(--gform-theme-control-box-shadow-focus);
        --gform-theme-control-button-box-shadow-disabled-simple: var(--gform-theme-control-button-box-shadow-simple);
        --gform-theme-control-button-color-simple: rgba(var(--gform-theme-color-outside-control-dark-rgb),0.65);
        --gform-theme-control-button-color-hover-simple: var(--gform-theme-color-outside-control-dark);
        --gform-theme-control-button-color-focus-simple: var(--gform-theme-control-button-color-hover-simple);
        --gform-theme-control-button-color-disabled-simple: var(--gform-theme-control-button-color-simple);
        --gform-theme-control-button-size-simple: 24px;
        --gform-theme-control-button-icon-color-simple: var(--gform-theme-control-button-color-simple);
        --gform-theme-control-button-icon-color-hover-simple: var(--gform-theme-control-button-color-hover-simple);
        --gform-theme-control-button-icon-color-focus-simple: var(--gform-theme-control-button-color-focus-simple);
        --gform-theme-control-button-icon-color-disabled-simple: var(--gform-theme-control-button-color-disabled-simple);
        --gform-theme-control-choice-check-color: var(--gform-theme-color-primary);
        --gform-theme-control-choice-check-color-disabled: rgba(var(--gform-theme-color-inside-control-contrast-rgb),0.2);
        --gform-theme-control-choice-size-sm: 18px;
        --gform-theme-control-choice-size-md: 20px;
        --gform-theme-control-choice-size-lg: 22px;
        --gform-theme-control-choice-size-xl: 28px;
        --gform-theme-control-choice-size: var(--gform-theme-control-choice-size-md);
        --gform-theme-control-checkbox-check-border-radius: var(--gform-theme-control-border-radius-max-sm);
        --gform-theme-control-checkbox-check-size-sm: 12px;
        --gform-theme-control-checkbox-check-size-md: initial;
        --gform-theme-control-checkbox-check-size-lg: 15px;
        --gform-theme-control-checkbox-check-size-xl: 19px;
        --gform-theme-control-checkbox-check-size: var(--gform-theme-control-checkbox-check-size-md);
        --gform-theme-control-radio-check-border-radius: 50%;
        --gform-theme-control-radio-check-content: "";
        --gform-theme-control-radio-check-size-sm: 6px;
        --gform-theme-control-radio-check-size-md: 7px;
        --gform-theme-control-radio-check-size-lg: 8px;
        --gform-theme-control-radio-check-size-xl: 10px;
        --gform-theme-control-radio-check-size: var(--gform-theme-control-radio-check-size-md);
        --gform-theme-control-date-datepicker-background-color: var(--gform-theme-control-background-color);
        --gform-theme-control-date-datepicker-box-shadow: 0 0 1px rgba(18,25,97,.24),0 24px 24px rgba(18,25,97,.03),0 2px 2px rgba(18,25,97,.03),0 4px 4px rgba(18,25,97,.03),0 8px 8px rgba(18,25,97,.03),0 16px 16px rgba(18,25,97,.03);
        --gform-theme-control-date-datepicker-padding-block: 16px;
        --gform-theme-control-date-datepicker-padding-inline: 16px;
        --gform-theme-control-date-datepicker-border-radius: var(--gform-theme-control-border-radius-max-md);
        --gform-theme-control-date-datepicker-inline-size: 300px;
        --gform-theme-control-date-datepicker-margin-block-start: 12px;
        --gform-theme-control-date-datepicker-header-icons-inline-size: 20px;
        --gform-theme-control-date-datepicker-header-icons-color: var(--gform-theme-control-icon-color);
        --gform-theme-control-date-datepicker-header-icons-color-hover: var(--gform-theme-control-icon-color-hover);
        --gform-theme-control-date-datepicker-header-icons-font-size: 20px;
        --gform-theme-control-date-datepicker-title-color: var(--gform-theme-color-secondary-contrast);
        --gform-theme-control-date-datepicker-title-font-size: 14px;
        --gform-theme-control-date-datepicker-title-font-weight: 500;
        --gform-theme-control-date-datepicker-title-line-height: 1.5;
        --gform-theme-control-date-datepicker-dropdown-background-image: var(--gform-theme-icon-control-select);
        --gform-theme-control-date-datepicker-dropdown-background-position: var(--gform-theme-control-select-icon-position);
        --gform-theme-control-date-datepicker-dropdown-background-size: var(--gform-theme-control-select-icon-size);
        --gform-theme-control-date-datepicker-dropdown-border-color: var(--gform-theme-color-inside-control-light-darker);
        --gform-theme-control-date-datepicker-dropdown-border-style: var(--gform-theme-control-border-style);
        --gform-theme-control-date-datepicker-dropdown-border-width: var(--gform-theme-control-border-width);
        --gform-theme-control-date-datepicker-dropdown-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        --gform-theme-control-date-datepicker-dropdown-text-align: start;
        --gform-theme-control-date-datepicker-table-margin-block-start: 16px;
        --gform-theme-control-date-datepicker-table-margin-block-end: 0;
        --gform-theme-control-date-datepicker-table-head-cell-font-size: 12px;
        --gform-theme-control-date-datepicker-table-head-cell-font-weight: 600;
        --gform-theme-control-date-datepicker-table-head-cell-line-height: 1.33;
        --gform-theme-control-date-datepicker-table-head-cell-vertical-align: middle;
        --gform-theme-control-date-datepicker-table-cell-padding: 1px;
        --gform-theme-control-date-datepicker-table-cell-block-size: 40px;
        --gform-theme-control-date-datepicker-table-cell-font-size: 14px;
        --gform-theme-control-date-datepicker-table-cell-font-weight: 400;
        --gform-theme-control-date-datepicker-table-cell-line-height: 1.43;
        --gform-theme-control-date-datepicker-table-cell-content-align-items: center;
        --gform-theme-control-date-datepicker-table-cell-content-background-color-disabled: transparent;
        --gform-theme-control-date-datepicker-table-cell-content-background-color-hover: #f4f8ff;
        --gform-theme-control-date-datepicker-table-cell-content-background-color-selected: var(--gform-theme-color-primary);
        --gform-theme-control-date-datepicker-table-cell-content-border: var(--gform-theme-control-border-width) var(--gform-theme-control-border-style) var(--gform-theme-color-primary);
        --gform-theme-control-date-datepicker-table-cell-content-border-radius: var(--gform-theme-control-border-radius-max-md);
        --gform-theme-control-date-datepicker-table-cell-content-color: var(--gform-theme-color-secondary-contrast);
        --gform-theme-control-date-datepicker-table-cell-content-color-disabled: #cfd3d9;
        --gform-theme-control-date-datepicker-table-cell-content-color-hover: var(--gform-theme-control-date-datepicker-table-cell-content-color);
        --gform-theme-control-date-datepicker-table-cell-content-color-selected: var(--gform-theme-color-primary-contrast);
        --gform-theme-control-description-color: var(--gform-theme-color-outside-control-dark);
        --gform-theme-control-description-font-family: var(--gform-theme-font-family-tertiary);
        --gform-theme-control-description-font-size: var(--gform-theme-font-size-tertiary);
        --gform-theme-control-description-font-style: var(--gform-theme-font-style-tertiary);
        --gform-theme-control-description-font-weight: var(--gform-theme-font-weight-tertiary);
        --gform-theme-control-description-letter-spacing: var(--gform-theme-letter-spacing-tertiary);
        --gform-theme-control-description-line-height: var(--gform-theme-line-height-tertiary);
        --gform-theme-control-description-color-error: var(--gform-theme-color-danger);
        --gform-theme-control-description-font-family-error: var(--gform-theme-control-description-font-family);
        --gform-theme-control-description-font-size-error: var(--gform-theme-control-description-font-size);
        --gform-theme-control-description-font-style-error: var(--gform-theme-control-description-font-style);
        --gform-theme-control-description-font-weight-error: var(--gform-theme-control-description-font-weight);
        --gform-theme-control-description-letter-spacing-error: var(--gform-theme-control-description-letter-spacing);
        --gform-theme-control-description-line-height-error: var(--gform-theme-control-description-line-height);
        --gform-theme-control-file-padding-inline: 0 var(--gform-theme-control-padding-inline);
        --gform-theme-control-file-button-background-color: var(--gform-theme-color-secondary-darker);
        --gform-theme-control-file-button-background-color-hover: var(--gform-theme-color-secondary);
        --gform-theme-control-file-button-background-color-focus: var(--gform-theme-control-file-button-background-color);
        --gform-theme-control-file-button-background-color-disabled: var(--gform-theme-control-file-button-background-color);
        --gform-theme-control-file-button-border-inline-end-width: 1px;
        --gform-theme-control-file-button-border-inline-end-style: solid;
        --gform-theme-control-file-button-border-inline-end-color: var(--gform-theme-control-border-color);
        --gform-theme-control-file-button-border-inline-end-color-hover: var(--gform-theme-control-file-button-border-inline-end-color);
        --gform-theme-control-file-button-border-inline-end-color-focus: var(--gform-theme-control-file-button-border-inline-end-color);
        --gform-theme-control-file-button-border-inline-end-color-disabled: var(--gform-theme-control-file-button-border-inline-end-color);
        --gform-theme-control-file-button-border-radius: var(--gform-theme-control-border-radius);
        --gform-theme-control-file-button-color: rgba(var(--gform-theme-color-secondary-contrast-rgb),0.725);
        --gform-theme-control-file-button-color-hover: var(--gform-theme-control-file-button-color);
        --gform-theme-control-file-button-color-focus: var(--gform-theme-control-file-button-color);
        --gform-theme-control-file-button-color-disabled: var(--gform-theme-control-file-button-color);
        --gform-theme-control-file-button-font-family: var(--gform-theme-font-family);
        --gform-theme-control-file-button-font-size: 14px;
        --gform-theme-control-file-button-font-style: var(--gform-theme-font-style-base);
        --gform-theme-control-file-button-font-weight: 500;
        --gform-theme-control-file-button-letter-spacing: var(--gform-theme-letter-spacing-primary);
        --gform-theme-control-file-button-line-height: 1.43;
        --gform-theme-control-file-button-margin-inline: 0 12px;
        --gform-theme-control-file-button-padding-inline: 12px;
        --gform-theme-control-file-button-text-decoration: none;
        --gform-theme-control-file-button-text-transform: none;
        --gform-theme-control-file-button-transition: var(--gform-theme-control-transition);
        --gform-theme-control-file-drop-area-block-size: auto;
        --gform-theme-control-file-drop-area-border-style: dashed;
        --gform-theme-control-file-drop-area-border-radius: var(--gform-theme-control-border-radius-max-lg);
        --gform-theme-control-file-drop-area-color: rgba(var(--gform-theme-color-inside-control-contrast-rgb),0.725);
        --gform-theme-control-file-drop-area-font-weight: 500;
        --gform-theme-control-file-drop-area-line-height: 1;
        --gform-theme-control-file-drop-area-padding-inline: 40px;
        --gform-theme-control-file-drop-area-padding-block: 40px;
        --gform-theme-control-file-drop-area-icon-color: var(--gform-theme-color-primary);
        --gform-theme-control-file-drop-area-icon-font-size: 36px;
        --gform-theme-control-file-drop-area-icon-margin-block-end: 8px;
        --gform-theme-control-file-drop-area-instructions-margin-block-end: 12px;
        --gform-theme-control-file-upload-progress-ui-gap: 12px;
        --gform-theme-control-file-upload-progress-ui-size: var(--gform-theme-icon-font-size);
        --gform-theme-control-file-upload-progress-bar-background-color: var(--gform-theme-color-outside-control-light);
        --gform-theme-control-file-upload-progress-bar-background-color-loading: var(--gform-theme-color-primary);
        --gform-theme-control-file-upload-progress-bar-block-size: 6px;
        --gform-theme-control-file-upload-progress-bar-border-radius: var(--gform-theme-border-radius);
        --gform-theme-control-file-upload-progress-bar-transition: var(--gform-theme-transition-control);
        --gform-theme-control-file-upload-progress-text-color: var(--gform-theme-control-description-color);
        --gform-theme-control-file-upload-progress-text-min-inline-size: 33px;
        --gform-theme-control-file-upload-progress-text-font-size: 12px;
        --gform-theme-control-file-upload-progress-button-inset-block-start: -2px;
        --gform-theme-control-file-upload-progress-button-inset-inline-end: -2px;
        --gform-theme-control-file-upload-progress-button-position: absolute;
        --gform-theme-control-file-upload-progress-button-font-size-cancel: 0;
        --gform-theme-control-file-upload-progress-button-icon-size: var(--gform-theme-icon-font-size);
        --gform-theme-control-file-upload-progress-button-icon-color-complete: var(--gform-theme-color-success);
        --gform-theme-control-file-preview-area-gap: 16px;
        --gform-theme-control-file-preview-area-margin-block-start: 16px;
        --gform-theme-control-file-preview-file-font-family: var(--gform-theme-font-family-secondary);
        --gform-theme-control-file-preview-file-font-size: var(--gform-theme-font-size-secondary);
        --gform-theme-control-file-preview-file-font-style: var(--gform-theme-font-style-secondary);
        --gform-theme-control-file-preview-file-font-weight: var(--gform-theme-font-weight-secondary);
        --gform-theme-control-file-preview-file-letter-spacing: var(--gform-theme-letter-spacing-secondary);
        --gform-theme-control-file-preview-file-line-height: 1;
        --gform-theme-control-file-preview-file-gap: 4px;
        --gform-theme-control-file-preview-file-name-color: var(--gform-theme-control-label-color-primary);
        --gform-theme-control-file-preview-file-name-line-height: var(--gform-theme-line-height-secondary);
        --gform-theme-control-file-preview-file-name-overflow: hidden;
        --gform-theme-control-file-preview-file-name-padding-inline-end: calc(var(--gform-theme-control-file-upload-progress-button-icon-size) + var(--gform-theme-control-file-upload-progress-text-min-inline-size) + var(--gform-theme-control-file-upload-progress-ui-gap)*2);
        --gform-theme-control-file-preview-file-name-text-overflow: ellipsis;
        --gform-theme-control-file-preview-file-name-white-space: nowrap;
        --gform-theme-control-file-preview-file-size-color: var(--gform-theme-control-description-color);
        --gform-theme-control-label-color-primary: var(--gform-theme-color-outside-control-dark-darker);
        --gform-theme-control-label-font-family-primary: var(--gform-theme-font-family-secondary);
        --gform-theme-control-label-font-size-primary: var(--gform-theme-font-size-secondary);
        --gform-theme-control-label-font-style-primary: var(--gform-theme-font-style-secondary);
        --gform-theme-control-label-font-weight-primary: var(--gform-theme-font-weight-secondary);
        --gform-theme-control-label-letter-spacing-primary: var(--gform-theme-letter-spacing-secondary);
        --gform-theme-control-label-line-height-primary: var(--gform-theme-line-height-secondary);
        --gform-theme-control-label-color-secondary: var(--gform-theme-color-outside-control-dark-darker);
        --gform-theme-control-label-font-family-secondary: var(--gform-theme-font-family-secondary);
        --gform-theme-control-label-font-size-secondary: var(--gform-theme-font-size-secondary);
        --gform-theme-control-label-font-style-secondary: var(--gform-theme-font-style-secondary);
        --gform-theme-control-label-font-weight-secondary: 400;
        --gform-theme-control-label-letter-spacing-secondary: var(--gform-theme-letter-spacing-secondary);
        --gform-theme-control-label-line-height-secondary: var(--gform-theme-line-height-secondary);
        --gform-theme-control-label-color-tertiary: var(--gform-theme-color-outside-control-dark);
        --gform-theme-control-label-font-family-tertiary: var(--gform-theme-font-family-tertiary);
        --gform-theme-control-label-font-size-tertiary: var(--gform-theme-font-size-tertiary);
        --gform-theme-control-label-font-style-tertiary: var(--gform-theme-font-style-tertiary);
        --gform-theme-control-label-font-weight-tertiary: var(--gform-theme-font-weight-tertiary);
        --gform-theme-control-label-letter-spacing-tertiary: var(--gform-theme-letter-spacing-tertiary);
        --gform-theme-control-label-line-height-tertiary: var(--gform-theme-line-height-tertiary);
        --gform-theme-control-label-color-quaternary: var(--gform-theme-color-outside-control-dark);
        --gform-theme-control-label-font-family-quaternary: var(--gform-theme-font-family-tertiary);
        --gform-theme-control-label-font-size-quaternary: var(--gform-theme-font-size-secondary);
        --gform-theme-control-label-font-style-quaternary: var(--gform-theme-font-style-tertiary);
        --gform-theme-control-label-font-weight-quaternary: var(--gform-theme-font-weight-secondary);
        --gform-theme-control-label-letter-spacing-quaternary: var(--gform-theme-letter-spacing-tertiary);
        --gform-theme-control-label-line-height-quaternary: var(--gform-theme-line-height-tertiary);
        --gform-theme-control-label-color-required: var(--gform-theme-color-danger);
        --gform-theme-control-label-font-family-required: var(--gform-theme-control-label-font-family-primary);
        --gform-theme-control-label-font-size-required: 12px;
        --gform-theme-control-label-font-style-required: var(--gform-theme-control-label-font-style-primary);
        --gform-theme-control-label-font-weight-required: var(--gform-theme-control-label-font-weight-primary);
        --gform-theme-control-label-letter-spacing-required: var(--gform-theme-control-label-letter-spacing-primary);
        --gform-theme-control-label-line-height-required: var(--gform-theme-control-label-line-height-primary);
        --gform-theme-control-number-spin-button-appearance: var(--gform-theme-control-appearance);
        --gform-theme-control-number-spin-button-background-position: center center;
        --gform-theme-control-number-spin-button-background-size: 8px 14px;
        --gform-theme-control-number-spin-button-inline-size: 8px;
        --gform-theme-control-number-spin-button-opacity: 1;
        --gform-theme-control-select-icon-position: calc(100% - var(--gform-theme-control-padding-inline)) center;
        --gform-theme-control-select-icon-size: 10px;
        --gform-theme-control-select-ms-expand: none;
        --gform-theme-control-select-padding-inline: var(--gform-theme-control-padding-inline) calc(var(--gform-theme-control-select-search-icon-size) + var(--gform-theme-control-padding-inline));
        --gform-theme-control-select-dropdown-shadow: 0 0 1px rgba(18,25,97,.24),0 24px 24px rgba(18,25,97,.03),0 2px 2px rgba(18,25,97,.03),0 4px 4px rgba(18,25,97,.03),0 8px 8px rgba(18,25,97,.03),0 16px 16px rgba(18,25,97,.03);
        --gform-theme-control-select-dropdown-border-color: transparent;
        --gform-theme-control-select-dropdown-border-radius: var(--gform-theme-control-border-radius-max-md);
        --gform-theme-control-select-dropdown-option-background-color-hover: var(--gform-theme-color-inside-control-light-lighter);
        --gform-theme-control-select-dropdown-option-box-shadow-hover: inset 3px 0 0 var(--gform-theme-color-primary);
        --gform-theme-control-select-search-icon-size: var(--gform-theme-icon-font-size);
        --gform-theme-control-select-search-icon-position: var(--gform-theme-control-padding-inline) center;
        --gform-theme-control-select-search-padding-inline: calc(var(--gform-theme-control-select-search-icon-size) + var(--gform-theme-control-padding-inline) + 8px) var(--gform-theme-control-padding-inline);
        --gform-theme-control-multiselect-block-size: 130px;
        --gform-theme-control-multiselect-border-radius: var(--gform-theme-control-border-radius-max-lg);
        --gform-theme-control-multiselect-line-height: 1.5;
        --gform-theme-control-multiselect-padding-block: var(--gform-theme-padding-block);
        --gform-theme-control-multiselect-close-icon-size: var(--gform-theme-icon-font-size);
        --gform-theme-control-multiselect-close-icon-inset-block-start: calc(50% - var(--gform-theme-control-multiselect-close-icon-size)/2);
        --gform-theme-control-multiselect-close-icon-inset-inline-end: calc(var(--gform-theme-control-padding-inline)/2 + 2px);
        --gform-theme-control-multiselect-selected-item-background-color: var(--gform-theme-color-primary);
        --gform-theme-control-multiselect-selected-item-border-radius: 33px;
        --gform-theme-control-multiselect-selected-item-color: var(--gform-theme-color-primary-contrast);
        --gform-theme-control-multiselect-selected-item-font-size: var(--gform-theme-control-font-size);
        --gform-theme-control-multiselect-selected-item-font-weight: 600;
        --gform-theme-control-multiselect-selected-item-remove-icon-color: var(--gform-theme-color-primary-contrast)
    }

    html[dir=rtl] .gform-theme--framework {
        --gform-theme-control-select-icon-position: var(--gform-theme-control-padding-inline) center;
        --gform-theme-control-select-search-icon-position: calc(100% - var(--gform-theme-padding-inline)) center
    }

    .gform-theme--framework {
        --gform-theme-control-textarea-block-size: 130px;
        --gform-theme-control-textarea-border-radius: var(--gform-theme-control-border-radius-max-lg);
        --gform-theme-control-textarea-line-height: 1.5;
        --gform-theme-control-textarea-padding-block: var(--gform-theme-padding-block);
        --gform-theme-control-textarea-resize: vertical;
        --gform-theme-field-date-icon-color: var(--gform-theme-control-icon-color);
        --gform-theme-field-date-icon-color-hover: var(--gform-theme-control-icon-color-hover);
        --gform-theme-field-date-custom-icon-max-block-size: 20px;
        --gform-theme-field-date-custom-icon-max-inline-size: 20px;
        --gform-theme-field-choice-spacing: var(--gform-theme-label-spacing-horizontal-secondary);
        --gform-theme-field-choice-meta-margin-block-start: 4px;
        --gform-theme-field-choice-meta-spacing: 16px;
        --gform-theme-field-choice-other-control-max-inline-size: 256px;
        --gform-theme-field-list-button-size: 16px;
        --gform-theme-field-list-button-border-radius: 50%;
        --gform-theme-field-list-button-font-size: 0;
        --gform-theme-field-list-button-padding-block: 0;
        --gform-theme-field-list-button-padding-inline: 0;
        --gform-theme-field-page-progress-color: var(--gform-theme-color-outside-control-dark);
        --gform-theme-field-page-progress-font-family: var(--gform-theme-font-family);
        --gform-theme-field-page-progress-font-size: 14px;
        --gform-theme-field-page-progress-font-style: var(--gform-theme-font-style-base);
        --gform-theme-field-page-progress-font-weight: 600;
        --gform-theme-field-page-progress-letter-spacing: 0;
        --gform-theme-field-page-progress-line-height: 1;
        --gform-theme-field-page-progress-text-transform: uppercase;
        --gform-theme-field-page-progress-margin-block-end: 24px;
        --gform-theme-field-page-progress-title-margin-block-end: 16px;
        --gform-theme-field-page-progress-bar-background-color: var(--gform-theme-color-outside-control-light);
        --gform-theme-field-page-progress-bar-background-color-blue: #204ce5;
        --gform-theme-field-page-progress-bar-background-color-gray: var(--gform-theme-color-outside-control-dark);
        --gform-theme-field-page-progress-bar-background-color-green: #31c48d;
        --gform-theme-field-page-progress-bar-background-color-orange: #ff5a1f;
        --gform-theme-field-page-progress-bar-background-color-red: #c02b0a;
        --gform-theme-field-page-progress-bar-background-gradient-spring: linear-gradient(270deg,#9cd790,#76d7db);
        --gform-theme-field-page-progress-bar-background-gradient-blues: linear-gradient(270deg,#00c2ff,#7838e2);
        --gform-theme-field-page-progress-bar-background-gradient-rainbow: linear-gradient(274.73deg,#74b551 -5.58%,#f3ca30 44.81%,#cd302b 93.15%);
        --gform-theme-field-page-progress-bar-block-size: 10px;
        --gform-theme-field-page-progress-bar-border-radius: 100px;
        --gform-theme-field-page-steps-step-gap: 12px;
        --gform-theme-field-page-steps-number-background-color: transparent;
        --gform-theme-field-page-steps-number-background-color-active: var(--gform-theme-color-outside-control-light);
        --gform-theme-field-page-steps-number-background-color-complete: var(--gform-theme-color-primary);
        --gform-theme-field-page-steps-number-border-color: var(--gform-theme-color-outside-control-light-darker);
        --gform-theme-field-page-steps-number-border-color-active: transparent;
        --gform-theme-field-page-steps-number-border-color-complete: var(--gform-theme-color-primary);
        --gform-theme-field-page-steps-number-border-radius: 50%;
        --gform-theme-field-page-steps-number-border-style: solid;
        --gform-theme-field-page-steps-number-border-width: 2px;
        --gform-theme-field-page-steps-number-color: var(--gform-theme-color-outside-control-dark);
        --gform-theme-field-page-steps-number-color-active: var(--gform-theme-field-page-steps-number-color);
        --gform-theme-field-page-steps-number-color-complete: var(--gform-theme-color-primary-contrast);
        --gform-theme-field-page-steps-number-size: 32px;
        --gform-theme-field-page-steps-icon-font-size: var(--gform-theme-icon-font-size);
        --gform-theme-field-password-strength-background-color: transparent;
        --gform-theme-field-password-strength-background-color-mismatch: transparent;
        --gform-theme-field-password-strength-background-color-short: transparent;
        --gform-theme-field-password-strength-background-color-bad: transparent;
        --gform-theme-field-password-strength-background-color-good: transparent;
        --gform-theme-field-password-strength-background-color-strong: transparent;
        --gform-theme-field-password-strength-border-color: transparent;
        --gform-theme-field-password-strength-border-color-mismatch: transparent;
        --gform-theme-field-password-strength-border-color-short: transparent;
        --gform-theme-field-password-strength-border-color-bad: transparent;
        --gform-theme-field-password-strength-border-color-good: transparent;
        --gform-theme-field-password-strength-border-color-strong: transparent;
        --gform-theme-field-password-strength-border-radius: 0;
        --gform-theme-field-password-strength-border-style: var(--gform-theme-control-border-style);
        --gform-theme-field-password-strength-border-width: 0;
        --gform-theme-field-password-strength-color: var(--gform-theme-color-outside-control-dark);
        --gform-theme-field-password-strength-color-mismatch: #c02b0a;
        --gform-theme-field-password-strength-color-short: #c02b0a;
        --gform-theme-field-password-strength-color-bad: #ff5a1f;
        --gform-theme-field-password-strength-color-good: #8b6c32;
        --gform-theme-field-password-strength-color-strong: #399f4b;
        --gform-theme-field-password-strength-font-family: var(--gform-theme-font-family-secondary);
        --gform-theme-field-password-strength-font-size: var(--gform-theme-font-size-primary);
        --gform-theme-field-password-strength-font-style: var(--gform-theme-font-style-secondary);
        --gform-theme-field-password-strength-font-weight: var(--gform-theme-font-weight-secondary);
        --gform-theme-field-password-strength-letter-spacing: var(--gform-theme-letter-spacing-secondary);
        --gform-theme-field-password-strength-line-height: 1;
        --gform-theme-field-password-strength-margin-block-start: 16px;
        --gform-theme-field-password-strength-padding-block: 0;
        --gform-theme-field-password-strength-padding-inline: 73px 0;
        --gform-theme-field-password-strength-text-align: left;
        --gform-theme-field-password-strength-transition: var(--gform-theme-transition-control);
        --gform-theme-field-password-strength-indicator-background-color: var(--gform-theme-color-outside-control-light);
        --gform-theme-field-password-strength-indicator-background-color-mismatch: var(--gform-theme-field-password-strength-color-mismatch);
        --gform-theme-field-password-strength-indicator-background-color-short: var(--gform-theme-field-password-strength-color-short);
        --gform-theme-field-password-strength-indicator-background-color-bad: var(--gform-theme-field-password-strength-color-bad);
        --gform-theme-field-password-strength-indicator-background-color-good: var(--gform-theme-field-password-strength-color-good);
        --gform-theme-field-password-strength-indicator-background-color-strong: var(--gform-theme-field-password-strength-color-strong);
        --gform-theme-field-password-strength-indicator-block-size: 6px;
        --gform-theme-field-password-strength-indicator-border-radius: var(--gform-theme-border-radius);
        --gform-theme-field-password-strength-indicator-content: "";
        --gform-theme-field-password-strength-indicator-display: inline-block;
        --gform-theme-field-password-strength-indicator-inline-size: 65px;
        --gform-theme-field-password-strength-indicator-inline-size-blank: 0;
        --gform-theme-field-password-strength-indicator-inline-size-mismatch: 65px;
        --gform-theme-field-password-strength-indicator-inline-size-short: 22px;
        --gform-theme-field-password-strength-indicator-inline-size-bad: 37px;
        --gform-theme-field-password-strength-indicator-inline-size-good: 46px;
        --gform-theme-field-password-strength-indicator-inline-size-strong: 65px;
        --gform-theme-field-password-strength-indicator-inset-block-start: 50%;
        --gform-theme-field-password-strength-indicator-inset-inline-start: 0;
        --gform-theme-field-password-strength-indicator-position: absolute;
        --gform-theme-field-password-strength-indicator-transform: translateY(-50%);
        --gform-theme-field-password-strength-indicator-transition: var(--gform-theme-transition-control);
        --gform-theme-field-product-quantity-inline-size: 150px;
        --gform-theme-field-product-quantity-margin-block-end: var(--gform-theme-field-row-gap);
        --gform-theme-field-product-price-color: var(--gform-theme-control-label-color-primary);
        --gform-theme-field-repeater-row-gap: var(--gform-theme-form-row-gap);
        --gform-theme-field-repeater-button-inline-gap: var(--gform-theme-form-col-gap);
        --gform-theme-field-repeater-separator-color: var(--gform-theme-color-outside-control-light-darker);
        --gform-theme-field-repeater-separator-size: 1px;
        --gform-theme-field-repeater-nested-border-color: var(--gform-theme-color-outside-control-light-darker);
        --gform-theme-field-repeater-nested-border-size: 1px;
        --gform-theme-field-repeater-nested-border-style: solid;
        --gform-theme-field-repeater-nested-padding-inline-start: 20px;
        --gform-theme-field-section-border-color: var(--gform-theme-color-outside-control-light-darker);
        --gform-theme-field-section-border-style: solid;
        --gform-theme-field-section-border-width: 1px;
        --gform-theme-field-section-padding-block-end: 8px;
        --gform-theme-form-validation-background-color: rgba(var(--gform-theme-color-danger-rgb),0.03);
        --gform-theme-form-validation-border-color: rgba(var(--gform-theme-color-danger-rgb),0.25);
        --gform-theme-form-validation-border-width: 1px;
        --gform-theme-form-validation-border-style: solid;
        --gform-theme-form-validation-border-radius: var(--gform-theme-control-border-radius-max-md);
        --gform-theme-form-validation-box-shadow: 0 1px 4px rgba(18,25,97,.078);
        --gform-theme-form-validation-color: var(--gform-theme-color-danger);
        --gform-theme-form-validation-font-family: var(--gform-theme-font-family-primary);
        --gform-theme-form-validation-font-size: var(--gform-theme-font-size-primary);
        --gform-theme-form-validation-gap: 8px;
        --gform-theme-form-validation-line-height: 1.43;
        --gform-theme-form-validation-margin-block: 0 var(--gform-theme-form-row-gap);
        --gform-theme-form-validation-padding-block: 20px;
        --gform-theme-form-validation-padding-inline: 16px;
        --gform-theme-form-validation-heading-color: var(--gform-theme-form-validation-color);
        --gform-theme-form-validation-heading-font-family: var(--gform-theme-form-validation-font-family);
        --gform-theme-form-validation-heading-font-size: var(--gform-theme-form-validation-font-size);
        --gform-theme-form-validation-heading-font-weight: 500;
        --gform-theme-form-validation-heading-line-height: var(--gform-theme-form-validation-line-height);
        --gform-theme-form-validation-heading-gap: 12px;
        --gform-theme-form-validation-heading-icon-background-color: rgba(var(--gform-theme-color-danger-rgb),0.05);
        --gform-theme-form-validation-heading-icon-border-color: var(--gform-theme-form-validation-border-color);
        --gform-theme-form-validation-heading-icon-border-width: 2px;
        --gform-theme-form-validation-heading-icon-border-style: var(--gform-theme-form-validation-border-style);
        --gform-theme-form-validation-heading-icon-border-radius: 50%;
        --gform-theme-form-validation-heading-icon-color: var(--gform-theme-form-validation-heading-color);
        --gform-theme-form-validation-heading-icon-font-size: 18px;
        --gform-theme-form-validation-heading-icon-size: 20px;
        --gform-theme-form-validation-summary-block-start: 4px;
        --gform-theme-form-validation-summary-color: var(--gform-theme-form-validation-color);
        --gform-theme-form-validation-summary-font-family: var(--gform-theme-form-validation-font-family);
        --gform-theme-form-validation-summary-font-size: var(--gform-theme-form-validation-font-size);
        --gform-theme-form-validation-summary-font-weight: 400;
        --gform-theme-form-validation-summary-line-height: var(--gform-theme-form-validation-line-height);
        --gform-theme-form-validation-summary-padding-inline: 48px;
        --gform-theme-form-validation-summary-item-link-text-decoration: underline;
        --gform-theme-form-spinner-foreground-color: var(--gform-theme-color-primary);
        --gform-theme-form-spinner-background-color: rgba(var(--gform-theme-color-primary-rgb),0.1)
    }

    .gform-theme--framework :where(:not(html):not(iframe):not(canvas):not(img):not(svg):not(video) :not(svg *):not(symbol *) :not(.gform-theme__no-reset--el):not(.gform-theme__no-reset--children *):not(.gform_heading *):not(.gfield--type-html *):not(.gfield--type-section *):not(.form_saved_message>*):not(.wp-editor-container):not(.mce-tinymce):not(.mce-tinymce *):not(.wp-editor-area)) {
        all: unset;
        display: revert
    }

    .gform-theme--framework *,.gform-theme--framework :after,.gform-theme--framework :before {
        box-sizing: border-box
    }

    .gform-theme--framework a,.gform-theme--framework button {
        cursor: revert
    }

    .gform-theme--framework menu,.gform-theme--framework ol,.gform-theme--framework ul {
        list-style: none
    }

    .gform-theme--framework img {
        max-width: 100%
    }

    .gform-theme--framework table {
        border-collapse: collapse
    }

    .gform-theme--framework textarea {
        white-space: revert
    }

    .gform-theme--framework meter {
        -webkit-appearance: revert;
        -moz-appearance: revert;
        appearance: revert
    }

    .gform-theme--framework ::-moz-placeholder {
        color: unset
    }

    .gform-theme--framework ::placeholder {
        color: unset
    }

    .gform-theme--framework :where([hidden]) {
        display: none
    }

    .gform-theme--framework :where([contenteditable]) {
        -moz-user-modify: read-write;
        -webkit-user-modify: read-write;
        word-wrap: break-word;
        -webkit-line-break: after-white-space
    }

    .gform-theme--framework :where([draggable=true]) {
        -webkit-user-drag: element
    }

    .gform-theme--framework input[type=checkbox]:before,.gform-theme--framework input[type=radio]:before {
        height: auto;
        margin-block:0;margin-inline:0;position: static;
        width: auto
    }

    .gform-theme--framework input[type=checkbox]:after,.gform-theme--framework input[type=radio]:after {
        content: none
    }

    @font-face {
        font-display: block;
        font-family: gform-icons-orbital;
        font-style: normal;
        font-weight: 400;
        src: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-orbital.woff2?a4fc9t) format("woff2"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-orbital.ttf?a4fc9t) format("truetype"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-orbital.woff?a4fc9t) format("woff"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-orbital.svg?a4fc9t#gform-icons-orbital) format("svg")
    }

    .gform-orbital-icon {
        speak: never;
        font-feature-settings: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none
    }

    .gform-orbital-icon--arrow-back:before {
        content: "\e921"
    }

    .gform-orbital-icon--calendar-alt:before {
        content: "\e91a"
    }

    .gform-orbital-icon--selector:before {
        content: "\e90d"
    }

    .gform-orbital-icon--search:before {
        content: "\e917"
    }

    .gform-orbital-icon--trash:before {
        content: "\e919"
    }

    .gform-orbital-icon--cloud-upload-alt:before {
        content: "\e911"
    }

    .gform-orbital-icon--arrow-up:before {
        content: "\e912"
    }

    .gform-orbital-icon--arrow-down:before {
        content: "\e914"
    }

    .gform-orbital-icon--arrow-left:before {
        content: "\e915"
    }

    .gform-orbital-icon--arrow-right:before {
        content: "\e916"
    }

    .gform-orbital-icon--arrow-narrow-right:before {
        content: "\e913"
    }

    .gform-orbital-icon--arrow-sm-left:before {
        content: "\e91f"
    }

    .gform-orbital-icon--arrow-sm-right:before {
        content: "\e920"
    }

    .gform-orbital-icon--save-as:before {
        content: "\e910"
    }

    .gform-orbital-icon--minus-alt:before {
        content: "\e90e"
    }

    .gform-orbital-icon--plus-alt:before {
        content: "\e90f"
    }

    .gform-orbital-icon--eye-off:before {
        content: "\e90a"
    }

    .gform-orbital-icon--eye:before {
        content: "\e909"
    }

    .gform-orbital-icon--check-circle:before {
        content: "\e90c"
    }

    .gform-orbital-icon--check-mark:before {
        content: "\e900"
    }

    .gform-orbital-icon--check:before {
        content: "\e90b"
    }

    .gform-orbital-icon--check-mark-simple:before {
        content: "\e905"
    }

    .gform-orbital-icon--exclamation-simple:before {
        content: "\e906"
    }

    .gform-orbital-icon--information-simple:before {
        content: "\e907"
    }

    .gform-orbital-icon--question-mark-simple:before {
        content: "\e908"
    }

    .gform-orbital-icon--chevron-down:before {
        content: "\e901"
    }

    .gform-orbital-icon--chevron-up:before {
        content: "\e902"
    }

    .gform-orbital-icon--chevron-left:before {
        content: "\e91b"
    }

    .gform-orbital-icon--chevron-right:before {
        content: "\e91c"
    }

    .gform-orbital-icon--chevron-double-left:before {
        content: "\e91d"
    }

    .gform-orbital-icon--chevron-double-right:before {
        content: "\e91e"
    }

    .gform-orbital-icon--minus:before {
        content: "\e903"
    }

    .gform-orbital-icon--x-circle:before {
        content: "\e918"
    }

    .gform-orbital-icon--x:before {
        content: "\e904"
    }

    .gform-theme--framework ::-moz-placeholder {
        color: var(--gform-theme-control-placeholder-color);
        font-family: var(--gform-theme-control-placeholder-font-family);
        font-size: var(--gform-theme-control-placeholder-font-size);
        font-style: var(--gform-theme-control-placeholder-font-style);
        font-weight: var(--gform-theme-control-placeholder-font-weight);
        letter-spacing: var(--gform-theme-control-placeholder-letter-spacing);
        opacity: var(--gform-theme-control-placeholder-opacity)
    }

    .gform-theme--framework ::placeholder {
        color: var(--gform-theme-control-placeholder-color);
        font-family: var(--gform-theme-control-placeholder-font-family);
        font-size: var(--gform-theme-control-placeholder-font-size);
        font-style: var(--gform-theme-control-placeholder-font-style);
        font-weight: var(--gform-theme-control-placeholder-font-weight);
        letter-spacing: var(--gform-theme-control-placeholder-letter-spacing);
        opacity: var(--gform-theme-control-placeholder-opacity)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi,.gform-theme--framework .gfield--type-select .chosen-search input[type=text],.gform-theme--framework .gfield--type-select .chosen-single,.gform-theme--framework .gform-theme-field-control,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework select,.gform-theme--framework select[multiple],.gform-theme--framework textarea,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)),.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) {
        --gform-theme-local-appearance: var(--gform-theme-control-appearance);
        --gform-theme-local-background-color: var(--gform-theme-control-background-color);
        --gform-theme-local-block-size: var(--gform-theme-control-size);
        --gform-theme-local-border-radius: var(--gform-theme-control-border-radius);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color);
        --gform-theme-local-border-width: var(--gform-theme-control-border-width);
        --gform-theme-local-border-style: var(--gform-theme-control-border-style);
        --gform-theme-local-border-block-start: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-block-end: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-inline-start: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-inline-end: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-box-shadow: var(--gform-theme-control-box-shadow);
        --gform-theme-local-color: var(--gform-theme-control-color);
        --gform-theme-local-display: block;
        --gform-theme-local-font-family: var(--gform-theme-control-font-family);
        --gform-theme-local-font-size: var(--gform-theme-control-font-size);
        --gform-theme-local-font-style: var(--gform-theme-control-font-style);
        --gform-theme-local-font-weight: var(--gform-theme-control-font-weight);
        --gform-theme-local-inline-size: 100%;
        --gform-theme-local-letter-spacing: var(--gform-theme-control-letter-spacing);
        --gform-theme-local-line-height: var(--gform-theme-control-line-height);
        --gform-theme-local-min-block-size: auto;
        --gform-theme-local-outline: var(--gform-theme-control-outline);
        --gform-theme-local-outline-offset: var(--gform-theme-control-outline-offset);
        --gform-theme-local-padding-inline: var(--gform-theme-control-padding-inline);
        --gform-theme-local-padding-block: var(--gform-theme-control-padding-block);
        --gform-theme-local-transition: var(--gform-theme-control-transition);
        -webkit-border-after: var(--gform-theme-local-border-block-end);
        -webkit-border-before: var(--gform-theme-local-border-block-start);
        -webkit-border-end: var(--gform-theme-local-border-inline-end);
        -webkit-border-start: var(--gform-theme-local-border-inline-start);
        -webkit-appearance: var(--gform-theme-local-appearance);
        -moz-appearance: var(--gform-theme-local-appearance);
        appearance: var(--gform-theme-local-appearance);
        background-color: var(--gform-theme-local-background-color);
        block-size: var(--gform-theme-local-block-size);
        border-block-end:var(--gform-theme-local-border-block-end);border-block-start: var(--gform-theme-local-border-block-start);
        border-inline-end:var(--gform-theme-local-border-inline-end);border-inline-start: var(--gform-theme-local-border-inline-start);
        border-radius: var(--gform-theme-local-border-radius);
        box-shadow: var(--gform-theme-local-box-shadow);
        color: var(--gform-theme-local-color);
        display: var(--gform-theme-local-display);
        font-family: var(--gform-theme-local-font-family);
        font-size: var(--gform-theme-local-font-size);
        font-style: var(--gform-theme-local-font-style);
        font-weight: var(--gform-theme-local-font-weight);
        inline-size: var(--gform-theme-local-inline-size);
        letter-spacing: var(--gform-theme-local-letter-spacing);
        line-height: var(--gform-theme-local-line-height);
        margin-block:0;margin-inline:0;min-block-size: var(--gform-theme-local-min-block-size);
        outline: var(--gform-theme-local-outline);
        outline-offset: var(--gform-theme-local-outline-offset);
        padding-block:var(--gform-theme-local-padding-block);padding-inline: var(--gform-theme-local-padding-inline);
        transition: var(--gform-theme-local-transition)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .gform-theme-field-control--hover,.gform-theme--framework .gfield--type-multiselect .chosen-container-multi:hover,.gform-theme--framework .gfield--type-select .chosen-search input[type=text] .gform-theme-field-control--hover,.gform-theme--framework .gfield--type-select .chosen-search input[type=text]:hover,.gform-theme--framework .gfield--type-select .chosen-single .gform-theme-field-control--hover,.gform-theme--framework .gfield--type-select .chosen-single:hover,.gform-theme--framework .gform-theme-field-control .gform-theme-field-control--hover,.gform-theme--framework .gform-theme-field-control:hover,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)) .gform-theme-field-control--hover,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)):hover,.gform-theme--framework select .gform-theme-field-control--hover,.gform-theme--framework select:hover,.gform-theme--framework select[multiple] .gform-theme-field-control--hover,.gform-theme--framework select[multiple]:hover,.gform-theme--framework textarea .gform-theme-field-control--hover,.gform-theme--framework textarea:hover,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--hover,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover {
        --gform-theme-local-background-color: var(--gform-theme-control-background-color-hover);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color-hover);
        --gform-theme-local-color: var(--gform-theme-control-color-hover)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .gform-theme-field-control--focus,.gform-theme--framework .gfield--type-multiselect .chosen-container-multi:focus,.gform-theme--framework .gfield--type-select .chosen-search input[type=text] .gform-theme-field-control--focus,.gform-theme--framework .gfield--type-select .chosen-search input[type=text]:focus,.gform-theme--framework .gfield--type-select .chosen-single .gform-theme-field-control--focus,.gform-theme--framework .gfield--type-select .chosen-single:focus,.gform-theme--framework .gform-theme-field-control .gform-theme-field-control--focus,.gform-theme--framework .gform-theme-field-control:focus,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)) .gform-theme-field-control--focus,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)):focus,.gform-theme--framework select .gform-theme-field-control--focus,.gform-theme--framework select:focus,.gform-theme--framework select[multiple] .gform-theme-field-control--focus,.gform-theme--framework select[multiple]:focus,.gform-theme--framework textarea .gform-theme-field-control--focus,.gform-theme--framework textarea:focus,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--focus,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus {
        --gform-theme-local-background-color: var(--gform-theme-control-background-color-focus);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color-focus);
        --gform-theme-local-box-shadow: var(--gform-theme-control-box-shadow-focus);
        --gform-theme-local-color: var(--gform-theme-control-color-focus)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .gform-theme-field-control--disabled,.gform-theme--framework .gfield--type-multiselect .chosen-container-multi:disabled,.gform-theme--framework .gfield--type-select .chosen-search input[type=text] .gform-theme-field-control--disabled,.gform-theme--framework .gfield--type-select .chosen-search input[type=text]:disabled,.gform-theme--framework .gfield--type-select .chosen-single .gform-theme-field-control--disabled,.gform-theme--framework .gfield--type-select .chosen-single:disabled,.gform-theme--framework .gform-theme-field-control .gform-theme-field-control--disabled,.gform-theme--framework .gform-theme-field-control:disabled,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)) .gform-theme-field-control--disabled,.gform-theme--framework input[type]:where(:not(.gform-text-input-reset)):disabled,.gform-theme--framework select .gform-theme-field-control--disabled,.gform-theme--framework select:disabled,.gform-theme--framework select[multiple] .gform-theme-field-control--disabled,.gform-theme--framework select[multiple]:disabled,.gform-theme--framework textarea .gform-theme-field-control--disabled,.gform-theme--framework textarea:disabled,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) .gform-theme-field-control--disabled,.gform-theme--framework.gform-theme.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled {
        --gform-theme-local-background-color: var(--gform-theme-control-background-color-disabled);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color-disabled);
        --gform-theme-local-color: var(--gform-theme-control-color-disabled)
    }

    .gform-theme--framework .gfield_error .gform-theme-field-control,.gform-theme--framework .gfield_error input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework .gfield_error select,.gform-theme--framework .gfield_error select[multiple],.gform-theme--framework .gfield_error textarea {
        --gform-theme-local-background-color: var(--gform-theme-control-background-color-error);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color-error);
        --gform-theme-local-color: var(--gform-theme-control-color-error)
    }

    .gform-theme--framework .gform-field--size-sm input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework .gform-field--size-sm select,.gform-theme--framework .gform-field--size-sm select[multiple],.gform-theme--framework .gform-field--size-sm textarea {
        --gform-theme-local-block-size: var(--gform-theme-control-size-sm);
        --gform-theme-local-line-height: var(--gform-theme-control-size-sm)
    }

    .gform-theme--framework .gform-field--size-md input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework .gform-field--size-md select,.gform-theme--framework .gform-field--size-md select[multiple],.gform-theme--framework .gform-field--size-md textarea {
        --gform-theme-local-block-size: var(--gform-theme-control-size-md);
        --gform-theme-local-line-height: var(--gform-theme-control-size-md)
    }

    .gform-theme--framework .gform-field--size-lg input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework .gform-field--size-lg select,.gform-theme--framework .gform-field--size-lg select[multiple],.gform-theme--framework .gform-field--size-lg textarea {
        --gform-theme-local-block-size: var(--gform-theme-control-size-lg);
        --gform-theme-local-line-height: var(--gform-theme-control-size-lg)
    }

    .gform-theme--framework .gform-field--size-xl input[type]:where(:not(.gform-text-input-reset)),.gform-theme--framework .gform-field--size-xl select,.gform-theme--framework .gform-field--size-xl select[multiple],.gform-theme--framework .gform-field--size-xl textarea {
        --gform-theme-local-block-size: var(--gform-theme-control-size-xl);
        --gform-theme-local-line-height: var(--gform-theme-control-size-xl)
    }

    .gform-theme--framework input[type].gform-text-input-reset {
        --gform-theme-local-block-size: auto;
        --gform-theme-local-color: var(--gform-theme-control-readonly-color);
        --gform-theme-local-font-family: var(--gform-theme-control-readonly-font-family);
        --gform-theme-local-font-size: var(--gform-theme-control-readonly-font-size);
        --gform-theme-local-font-style: var(--gform-theme-control-readonly-font-style);
        --gform-theme-local-font-weight: var(--gform-theme-control-readonly-font-weight);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-readonly-letter-spacing);
        --gform-theme-local-line-height: var(--gform-theme-control-readonly-line-height);
        block-size: var(--gform-theme-local-block-size);
        color: var(--gform-theme-local-color);
        font-family: var(--gform-theme-local-font-family);
        font-size: var(--gform-theme-local-font-size);
        font-style: var(--gform-theme-local-font-style);
        font-weight: var(--gform-theme-local-font-weight);
        letter-spacing: var(--gform-theme-local-letter-spacing);
        line-height: var(--gform-theme-local-line-height)
    }

    .gform-theme--framework input[type=number]::-webkit-inner-spin-button,.gform-theme--framework input[type=number]::-webkit-outer-spin-button {
        opacity: var(--gform-theme-control-number-spin-button-opacity)
    }

    .gform-theme--framework input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: var(--gform-theme-control-number-spin-button-appearance);
        appearance: var(--gform-theme-control-number-spin-button-appearance);
        background-image: var(--gform-theme-icon-control-number);
        background-position: var(--gform-theme-control-number-spin-button-background-position);
        background-repeat: no-repeat;
        background-size: var(--gform-theme-control-number-spin-button-background-size);
        cursor: pointer;
        width: var(--gform-theme-control-number-spin-button-inline-size)
    }

    .gform-theme--framework textarea {
        --gform-theme-local-border-radius: var(--gform-theme-control-textarea-border-radius);
        --gform-theme-local-block-size: var(--gform-theme-control-textarea-block-size);
        --gform-theme-local-line-height: var(--gform-theme-control-textarea-line-height);
        --gform-theme-local-padding-block: var(--gform-theme-control-textarea-padding-block);
        resize: var(--gform-theme-control-textarea-resize)
    }

    .gform-theme--framework .wp-editor-container {
        border: var(--gform-theme-control-border-width) var(--gform-theme-control-border-style) var(--gform-theme-control-border-color);
        border-radius: var(--gform-theme-control-textarea-border-radius);
        overflow: hidden
    }

    .gform-theme--framework input[type=checkbox],.gform-theme--framework input[type=radio] {
        --gform-theme-local-block-size: var(--gform-theme-control-choice-size);
        --gform-theme-local-display: inline-grid;
        --gform-theme-local-inline-size: var(--gform-theme-control-choice-size);
        --gform-theme-local-line-height: var(--gform-theme-control-choice-size);
        --gform-theme-local-padding-block: 0;
        --gform-theme-local-padding-inline: 0;
        accent-color: var(--gform-theme-control-accent-color);
        align-content: center;
        justify-content: center;
        opacity: 1;
        place-content: center
    }

    .gform-theme--framework input[type=checkbox]:before,.gform-theme--framework input[type=radio]:before {
        opacity: 0
    }

    .gform-theme--framework input[type=checkbox]:checked:before,.gform-theme--framework input[type=radio]:checked:before {
        opacity: 1
    }

    .gform-theme--framework .gform-field--size-sm input[type=checkbox],.gform-theme--framework .gform-field--size-sm input[type=radio] {
        --gform-theme-local-block-size: var(--gform-theme-control-choice-size-sm);
        --gform-theme-local-inline-size: var(--gform-theme-control-choice-size-sm);
        --gform-theme-local-line-height: var(--gform-theme-control-choice-size-sm)
    }

    .gform-theme--framework .gform-field--size-md input[type=checkbox],.gform-theme--framework .gform-field--size-md input[type=radio] {
        --gform-theme-local-block-size: var(--gform-theme-control-choice-size-md);
        --gform-theme-local-inline-size: var(--gform-theme-control-choice-size-md);
        --gform-theme-local-line-height: var(--gform-theme-control-choice-size-md)
    }

    .gform-theme--framework .gform-field--size-lg input[type=checkbox],.gform-theme--framework .gform-field--size-lg input[type=radio] {
        --gform-theme-local-block-size: var(--gform-theme-control-choice-size-lg);
        --gform-theme-local-inline-size: var(--gform-theme-control-choice-size-lg);
        --gform-theme-local-line-height: var(--gform-theme-control-choice-size-lg)
    }

    .gform-theme--framework .gform-field--size-xl input[type=checkbox],.gform-theme--framework .gform-field--size-xl input[type=radio] {
        --gform-theme-local-block-size: var(--gform-theme-control-choice-size-xl);
        --gform-theme-local-inline-size: var(--gform-theme-control-choice-size-xl);
        --gform-theme-local-line-height: var(--gform-theme-control-choice-size-xl)
    }

    .gform-theme--framework input[type=checkbox] {
        --gform-theme-local-border-radius: var(--gform-theme-control-checkbox-check-border-radius)
    }

    .gform-theme--framework input[type=checkbox]:before {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: var(--gform-theme-control-choice-check-color);
        content: var(--gform-theme-icon-control-checkbox);
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-control-checkbox-check-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none
    }

    .gform-theme--framework input[type=checkbox]:disabled:before {
        color: var(--gform-theme-control-choice-check-color-disabled)
    }

    .gform-theme--framework .gform-field--size-sm input[type=checkbox]:before {
        font-size: var(--gform-theme-control-checkbox-check-size-sm)
    }

    .gform-theme--framework .gform-field--size-md input[type=checkbox]:before {
        font-size: var(--gform-theme-control-checkbox-check-size-md)
    }

    .gform-theme--framework .gform-field--size-lg input[type=checkbox]:before {
        font-size: var(--gform-theme-control-checkbox-check-size-lg)
    }

    .gform-theme--framework .gform-field--size-xl input[type=checkbox]:before {
        font-size: var(--gform-theme-control-checkbox-check-size-xl)
    }

    .gform-theme--framework input[type=radio] {
        --gform-theme-local-border-radius: var(--gform-theme-control-radio-check-border-radius)
    }

    .gform-theme--framework input[type=radio]:before {
        background-color: var(--gform-theme-control-choice-check-color);
        block-size: var(--gform-theme-control-radio-check-size);
        border-radius: var(--gform-theme-control-radio-check-border-radius);
        content: var(--gform-theme-control-radio-check-content);
        inline-size: var(--gform-theme-control-radio-check-size)
    }

    .gform-theme--framework input[type=radio]:disabled:before {
        background-color: var(--gform-theme-control-choice-check-color-disabled)
    }

    .gform-theme--framework .gform-field--size-sm input[type=radio]:before {
        block-size: var(--gform-theme-control-radio-check-size-sm);
        inline-size: var(--gform-theme-control-radio-check-size-sm)
    }

    .gform-theme--framework .gform-field--size-md input[type=radio]:before {
        block-size: var(--gform-theme-control-radio-check-size-md);
        inline-size: var(--gform-theme-control-radio-check-size-md)
    }

    .gform-theme--framework .gform-field--size-lg input[type=radio]:before {
        block-size: var(--gform-theme-control-radio-check-size-lg);
        inline-size: var(--gform-theme-control-radio-check-size-lg)
    }

    .gform-theme--framework .gform-field--size-xl input[type=radio]:before {
        block-size: var(--gform-theme-control-radio-check-size-xl);
        inline-size: var(--gform-theme-control-radio-check-size-xl)
    }

    .gform-theme--framework select:where(:not([multiple])) {
        --gform-theme-local-padding-inline: var(--gform-theme-control-select-padding-inline);
        background-image: var(--gform-theme-icon-control-select);
        background-position: var(--gform-theme-control-select-icon-position);
        background-repeat: no-repeat;
        background-size: var(--gform-theme-control-select-icon-size)
    }

    .gform-theme--framework select::-ms-expand {
        display: var(--gform-theme-control-select-ms-expand)
    }

    .gform-theme--framework select[multiple] {
        --gform-theme-local-block-size: var(--gform-theme-control-multiselect-block-size);
        --gform-theme-local-border-radius: var(--gform-theme-control-multiselect-border-radius);
        --gform-theme-local-line-height: var(--gform-theme-control-multiselect-line-height);
        --gform-theme-local-padding-block: var(--gform-theme-control-multiselect-padding-block);
        overflow-y: auto
    }

    .gform-theme--framework select[multiple] option:checked {
        background: var(--gform-theme-color-inside-control-light)
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single .chosen-single {
        background-image: var(--gform-theme-icon-control-select);
        background-position: var(--gform-theme-control-select-icon-position);
        background-repeat: no-repeat;
        background-size: var(--gform-theme-control-select-icon-size)
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single .chosen-single span {
        -webkit-margin-end: var(--gform-theme-control-select-search-icon-size);
        margin-inline-end:var(--gform-theme-control-select-search-icon-size)}

    .gform-theme--framework .gfield--type-select .chosen-container-single .chosen-single abbr,.gform-theme--framework .gfield--type-select .chosen-container-single .chosen-single div b {
        background-image: none!important
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single.chosen-container-active .chosen-single,.gform-theme--framework .gfield--type-select .chosen-container-single.chosen-container-active.chosen-with-drop .chosen-single {
        --gform-theme-local-background-color: var(--gform-theme-control-background-color-focus);
        --gform-theme-local-border-color: var(--gform-theme-control-border-color-focus);
        --gform-theme-local-box-shadow: var(--gform-theme-control-box-shadow-focus);
        --gform-theme-local-color: var(--gform-theme-control-color-focus)
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single.chosen-container-active.chosen-with-drop .chosen-single {
        border-bottom-left-radius: var(--gform-theme-control-border-radius);
        border-bottom-right-radius: var(--gform-theme-control-border-radius);
        border-color: var(--gform-theme-control-border-color-focus);
        box-shadow: var(--gform-theme-control-box-shadow-focus)
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single .chosen-search {
        padding-block:var(--gform-theme-padding-block) 0;padding-inline: var(--gform-theme-control-padding-inline)
    }

    .gform-theme--framework .gfield--type-select .chosen-container-single .chosen-search input[type=text] {
        --gform-theme-local-block-size: var(--gform-theme-control-size-md);
        --gform-theme-local-padding-inline: var(--gform-theme-control-select-search-padding-inline);
        background-image: var(--gform-theme-icon-control-search)!important;
        background-position: var(--gform-theme-control-select-search-icon-position);
        background-size: var(--gform-theme-control-select-search-icon-size)!important
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi {
        --gform-theme-local-block-size: auto;
        --gform-theme-local-border-radius: var(--gform-theme-control-multiselect-border-radius);
        padding-inline:0}

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi.chosen-container-active {
        border-color: var(--gform-theme-control-border-color-focus);
        box-shadow: var(--gform-theme-control-box-shadow-focus)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi.chosen-container-active .chosen-choices {
        box-shadow: none
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices {
        align-content: center;
        background: 0 0;
        border: none;
        display: flex;
        flex-flow: row wrap;
        gap: calc(var(--gform-theme-padding-block)/2);
        min-height: calc(var(--gform-theme-control-size) - 2px);
        padding-block:4px;padding-inline:var(--gform-theme-control-padding-inline)}

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-field input[type=text].chosen-search-input {
        color: var(--gform-theme-control-placeholder-color);
        font-family: var(--gform-theme-control-placeholder-font-family);
        font-size: var(--gform-theme-control-placeholder-font-size);
        font-style: var(--gform-theme-control-placeholder-font-style);
        font-weight: var(--gform-theme-control-placeholder-font-weight);
        letter-spacing: var(--gform-theme-control-placeholder-letter-spacing);
        opacity: var(--gform-theme-control-placeholder-opacity)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices .search-choice+li.search-field input[type=text].chosen-search-input {
        color: var(--gform-theme-control-color-focus);
        font-family: var(--gform-theme-control-font-family);
        font-size: var(--gform-theme-control-font-size);
        font-style: var(--gform-theme-control-font-style);
        font-weight: var(--gform-theme-control-font-weight);
        letter-spacing: var(--gform-theme-control-letter-spacing);
        opacity: 1
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-choice {
        align-self: flex-start;
        background: 0 0;
        background-color: var(--gform-theme-control-multiselect-selected-item-background-color);
        border: none;
        border-radius: var(--gform-theme-control-multiselect-selected-item-border-radius);
        box-shadow: none;
        color: var(--gform-theme-control-multiselect-selected-item-color);
        flex-shrink: 0;
        font-size: var(--gform-theme-control-multiselect-selected-item-font-size);
        font-weight: var(--gform-theme-control-multiselect-selected-item-font-weight);
        margin: 0;
        padding-block:8px;padding-inline:var(--gform-theme-control-padding-inline) calc(var(--gform-theme-control-padding-inline)*1.25 + var(--gform-theme-control-multiselect-close-icon-size))}

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
        background: 0 0;
        height: var(--gform-theme-control-multiselect-close-icon-size);
        inset-block-start: var(--gform-theme-control-multiselect-close-icon-inset-block-start);
        inset-inline-end: var(--gform-theme-control-multiselect-close-icon-inset-inline-end);
        opacity: 70%;
        transition: var(--gform-theme-local-transition);
        width: var(--gform-theme-control-multiselect-close-icon-size)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:before {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: var(--gform-theme-control-multiselect-selected-item-remove-icon-color);
        content: var(--gform-theme-icon-control-cancel);
        display: inline-block;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-control-multiselect-close-icon-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        height: 100%;
        line-height: 1;
        text-transform: none;
        width: 100%
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:focus,.gform-theme--framework .gfield--type-multiselect .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
        opacity: 1
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container .chosen-drop,.gform-theme--framework .gfield--type-select .chosen-container .chosen-drop {
        background-color: var(--gform-theme-control-background-color);
        border: var(--gform-theme-control-select-dropdown-border-color);
        border-radius: var(--gform-theme-control-select-dropdown-border-radius);
        box-shadow: var(--gform-theme-control-select-dropdown-shadow);
        overflow: hidden;
        padding-block:0;padding-inline:0;top: calc(100% + 8px)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container .chosen-results,.gform-theme--framework .gfield--type-select .chosen-container .chosen-results {
        margin-block:0;margin-inline:0;padding-block:var(--gform-theme-padding-block);padding-inline: 0
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container .chosen-results li,.gform-theme--framework .gfield--type-select .chosen-container .chosen-results li {
        color: var(--gform-theme-control-color);
        padding: var(--gform-theme-padding-block) var(--gform-theme-control-padding-inline)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container .chosen-results li.highlighted,.gform-theme--framework .gfield--type-select .chosen-container .chosen-results li.highlighted {
        background: 0 0;
        background-color: var(--gform-theme-control-select-dropdown-option-background-color-hover)
    }

    .gform-theme--framework .gfield--type-multiselect .chosen-container .chosen-results li.result-selected,.gform-theme--framework .gfield--type-select .chosen-container .chosen-results li.result-selected {
        background: 0 0;
        background-color: var(--gform-theme-control-select-dropdown-option-background-color-hover);
        box-shadow: var(--gform-theme-control-select-dropdown-option-box-shadow-hover)
    }

    .gform-theme--framework .gfield_list_group_item:before,.gform-theme--framework .gform-field-label {
        --gform-theme-local-color: var(--gform-theme-control-label-color-primary);
        --gform-theme-local-display: flex;
        --gform-theme-local-font-family: var(--gform-theme-control-label-font-family-primary);
        --gform-theme-local-font-size: var(--gform-theme-control-label-font-size-primary);
        --gform-theme-local-font-style: var(--gform-theme-control-label-font-style-primary);
        --gform-theme-local-font-weight: var(--gform-theme-control-label-font-weight-primary);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-label-letter-spacing-primary);
        --gform-theme-local-line-height: var(--gform-theme-control-label-line-height-primary);
        --gform-theme-local-margin-block: 0;
        --gform-theme-local-margin-inline: 0;
        color: var(--gform-theme-local-color);
        display: var(--gform-theme-local-display);
        font-family: var(--gform-theme-local-font-family);
        font-size: var(--gform-theme-local-font-size);
        font-style: var(--gform-theme-local-font-style);
        font-weight: var(--gform-theme-local-font-weight);
        letter-spacing: var(--gform-theme-local-letter-spacing);
        line-height: var(--gform-theme-local-line-height);
        margin-block:var(--gform-theme-local-margin-block);margin-inline: var(--gform-theme-local-margin-inline)
    }

    .gform-theme--framework .gform-field-label--type-inline {
        --gform-theme-local-color: var(--gform-theme-control-label-color-secondary);
        --gform-theme-local-display: block;
        --gform-theme-local-font-family: var(--gform-theme-control-label-font-family-secondary);
        --gform-theme-local-font-size: var(--gform-theme-control-label-font-size-secondary);
        --gform-theme-local-font-style: var(--gform-theme-control-label-font-style-secondary);
        --gform-theme-local-font-weight: var(--gform-theme-control-label-font-weight-secondary);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-label-letter-spacing-secondary);
        --gform-theme-local-line-height: var(--gform-theme-control-label-line-height-secondary)
    }

    .gform-theme--framework .gform-field-label--type-sub {
        --gform-theme-local-color: var(--gform-theme-control-label-color-tertiary);
        --gform-theme-local-display: block;
        --gform-theme-local-font-family: var(--gform-theme-control-label-font-family-tertiary);
        --gform-theme-local-font-size: var(--gform-theme-control-label-font-size-tertiary);
        --gform-theme-local-font-style: var(--gform-theme-control-label-font-style-tertiary);
        --gform-theme-local-font-weight: var(--gform-theme-control-label-font-weight-tertiary);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-label-letter-spacing-tertiary);
        --gform-theme-local-line-height: var(--gform-theme-control-label-line-height-tertiary)
    }

    .gform-theme--framework .gform-field-label--type-sub-large {
        --gform-theme-local-color: var(--gform-theme-control-label-color-quaternary);
        --gform-theme-local-display: inline-block;
        --gform-theme-local-font-family: var(--gform-theme-control-label-font-family-quaternary);
        --gform-theme-local-font-size: var(--gform-theme-control-label-font-size-quaternary);
        --gform-theme-local-font-style: var(--gform-theme-control-label-font-style-quaternary);
        --gform-theme-local-font-weight: var(--gform-theme-control-label-font-weight-quaternary);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-label-letter-spacing-quaternary);
        --gform-theme-local-line-height: var(--gform-theme-control-label-line-height-quaternary)
    }

    .gform-theme--framework .gform-field-label>.gfield_required {
        color: var(--gform-theme-control-label-color-required);
        display: inline-block;
        font-family: var(--gform-theme-control-label-font-family-required);
        font-size: var(--gform-theme-control-label-font-size-required);
        font-style: var(--gform-theme-control-label-font-style-required);
        font-weight: var(--gform-theme-control-label-font-weight-required);
        letter-spacing: var(--gform-theme-control-label-letter-spacing-required);
        line-height: var(--gform-theme-control-label-line-height-required)
    }

    .gform-theme--framework .gfield_description {
        --gform-theme-local-color: var(--gform-theme-control-description-color);
        --gform-theme-local-font-family: var(--gform-theme-control-description-font-family);
        --gform-theme-local-font-size: var(--gform-theme-control-description-font-size);
        --gform-theme-local-font-style: var(--gform-theme-control-description-font-style);
        --gform-theme-local-font-weight: var(--gform-theme-control-description-font-weight);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-description-letter-spacing);
        --gform-theme-local-line-height: var(--gform-theme-control-description-line-height);
        color: var(--gform-theme-local-color);
        display: block;
        font-family: var(--gform-theme-local-font-family);
        font-size: var(--gform-theme-local-font-size);
        font-style: var(--gform-theme-local-font-style);
        font-weight: var(--gform-theme-local-font-weight);
        letter-spacing: var(--gform-theme-local-letter-spacing);
        line-height: var(--gform-theme-local-line-height)
    }

    .gform-theme--framework .gfield_validation_message {
        --gform-theme-local-color: var(--gform-theme-control-description-color-error);
        --gform-theme-local-font-family: var(--gform-theme-control-description-font-family-error);
        --gform-theme-local-font-size: var(--gform-theme-control-description-font-size-error);
        --gform-theme-local-font-style: var(--gform-theme-control-description-font-style-error);
        --gform-theme-local-font-weight: var(--gform-theme-control-description-font-weight-error);
        --gform-theme-local-letter-spacing: var(--gform-theme-control-description-letter-spacing-error);
        --gform-theme-local-line-height: var(--gform-theme-control-description-line-height-error)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)),.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) {
        --gform-theme-local-block-size: auto;
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-primary);
        --gform-theme-local-border-radius: var(--gform-theme-control-button-border-radius);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-primary);
        --gform-theme-local-border-style: var(--gform-theme-control-button-border-style-primary);
        --gform-theme-local-border-width: var(--gform-theme-control-button-border-width-primary);
        --gform-theme-local-border-block-start: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-block-end: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-inline-start: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-inline-end: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow);
        --gform-theme-local-color: var(--gform-theme-control-button-color-primary);
        --gform-theme-local-column-gap: var(--gform-theme-control-button-icon-gap);
        --gform-theme-local-cursor: pointer;
        --gform-theme-local-display: inline-flex;
        --gform-theme-local-font-style: var(--gform-theme-control-button-font-style);
        --gform-theme-local-font-weight: var(--gform-theme-control-button-font-weight);
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size);
        --gform-theme-local-font-family: var(--gform-theme-control-button-font-family);
        --gform-theme-local-inline-size: auto;
        --gform-theme-local-letter-spacing: var(--gform-theme-control-button-letter-spacing);
        --gform-theme-local-line-height: var(--gform-theme-control-button-line-height);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size);
        --gform-theme-local-min-inline-size: auto;
        --gform-theme-local-opacity: var(--gform-theme-control-button-opacity);
        --gform-theme-local-padding-block: var(--gform-theme-control-button-padding-block);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline);
        --gform-theme-local-text-decoration: var(--gform-theme-control-button-text-decoration);
        --gform-theme-local-text-transform: var(--gform-theme-control-button-text-transform);
        align-items: center;
        -moz-column-gap: var(--gform-theme-local-column-gap);
        column-gap: var(--gform-theme-local-column-gap);
        cursor: var(--gform-theme-local-cursor);
        justify-content: center;
        min-inline-size: var(--gform-theme-local-min-inline-size);
        opacity: var(--gform-theme-local-opacity);
        text-align: center;
        -webkit-text-decoration: var(--gform-theme-local-text-decoration);
        text-decoration: var(--gform-theme-local-text-decoration);
        text-transform: var(--gform-theme-local-text-transform);
        vertical-align: top
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)) .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-primary);
        --gform-theme-local-content: var(--gform-theme-control-button-icon);
        --gform-theme-local-font-size: var(--gform-theme-control-button-icon-font-size);
        --gform-theme-local-transition: var(--gform-theme-control-button-transition);
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: var(--gform-theme-local-color);
        content: var(--gform-theme-local-content);
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-local-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none;
        transition: var(--gform-theme-local-transition)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-hover-primary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-hover-primary);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-hover);
        --gform-theme-local-color: var(--gform-theme-control-button-color-hover-primary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):hover:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):hover:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-hover-primary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-focus-primary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-focus-primary);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-focus);
        --gform-theme-local-color: var(--gform-theme-control-button-color-focus-primary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):focus:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):focus:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-focus-primary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-disabled-primary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-disabled-primary);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-disabled);
        --gform-theme-local-color: var(--gform-theme-control-button-color-disabled-primary);
        --gform-theme-local-cursor: default;
        --gform-theme-local-opacity: var(--gform-theme-control-button-opacity-disabled)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)):disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)):disabled:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-disabled-primary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-secondary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-secondary);
        --gform-theme-local-border-style: var(--gform-theme-control-button-border-style-secondary);
        --gform-theme-local-border-width: var(--gform-theme-control-button-border-width-secondary);
        --gform-theme-local-color: var(--gform-theme-control-button-color-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-hover-secondary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-hover-secondary);
        --gform-theme-local-color: var(--gform-theme-control-button-color-hover-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:hover:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-hover-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-focus-secondary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-focus-secondary);
        --gform-theme-local-color: var(--gform-theme-control-button-color-focus-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:focus:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-focus-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-disabled-secondary);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-disabled-secondary);
        --gform-theme-local-color: var(--gform-theme-control-button-color-disabled-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--secondary:disabled:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-disabled-secondary)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-simple);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-simple);
        --gform-theme-local-border-width: var(--gform-theme-control-button-border-width-simple);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-simple);
        --gform-theme-local-color: var(--gform-theme-control-button-color-simple);
        --gform-theme-local-column-gap: 0;
        --gform-theme-local-line-height: var(--gform-theme-control-button-size-simple);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-simple);
        --gform-theme-local-min-inline-size: var(--gform-theme-control-button-size-simple);
        --gform-theme-local-padding-block: 0;
        --gform-theme-local-padding-inline: 0
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-hover-simple);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-hover-simple);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-hover-simple);
        --gform-theme-local-color: var(--gform-theme-control-button-color-hover-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:hover:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-hover-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-focus-simple);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-focus-simple);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-focus-simple);
        --gform-theme-local-color: var(--gform-theme-control-button-color-focus-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:focus:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-focus-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled {
        --gform-theme-local-background-color: var(--gform-theme-control-button-background-color-disabled-simple);
        --gform-theme-local-border-color: var(--gform-theme-control-button-border-color-disabled-simple);
        --gform-theme-local-box-shadow: var(--gform-theme-control-button-box-shadow-disabled-simple);
        --gform-theme-local-color: var(--gform-theme-control-button-color-disabled-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled .dashicons:before,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:after,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--simple:disabled:before {
        --gform-theme-local-color: var(--gform-theme-control-button-icon-color-disabled-simple)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xs {
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size-xs);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-xs);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline-xs)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-sm {
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size-sm);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-sm);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline-sm)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--size-md,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-md {
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size-md);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-md);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline-md)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-lg {
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size-lg);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-lg);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline-lg)
    }

    .gform-theme.gform-theme--framework.gform_wrapper .button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper .gform-theme-button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper :where(:not(.mce-splitbtn))>button:not([id*=mceu_]):not(.mce-open):where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper button.button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]).button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper input:is([type=submit],[type=button],[type=reset]):where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl,.gform-theme.gform-theme--framework.gform_wrapper input[type=submit].button.gform_button:where(:not(.gform-theme-no-framework)).gform-theme-button--size-xl {
        --gform-theme-local-font-size: var(--gform-theme-control-button-font-size-xl);
        --gform-theme-local-min-block-size: var(--gform-theme-control-button-size-xl);
        --gform-theme-local-padding-inline: var(--gform-theme-control-button-padding-inline-xl)
    }

    .gform-theme--framework input[type=file] {
        --gform-theme-local-padding-inline: var(--gform-theme-control-file-padding-inline);
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .gform-theme--framework input[type=file]:hover::file-selector-button {
        --gform-theme-local-background-color: var(--gform-theme-control-file-button-background-color-hover);
        --gform-theme-local-border-inline-end-color: var(--gform-theme-control-file-button-border-inline-end-color-hover);
        --gform-theme-local-color: var(--gform-theme-control-file-button-color-hover)
    }

    .gform-theme--framework input[type=file]:focus::file-selector-button {
        --gform-theme-local-background-color: var(--gform-theme-control-file-button-background-color-focus);
        --gform-theme-local-border-inline-end-color: var(--gform-theme-control-file-button-border-inline-end-color-focus);
        --gform-theme-local-color: var(--gform-theme-control-file-button-color-focus)
    }

    .gform-theme--framework input[type=file]:disabled::file-selector-button {
        --gform-theme-local-background-color: var(--gform-theme-control-file-button-background-color-disabled);
        --gform-theme-local-border-inline-end-color: var(--gform-theme-control-file-button-border-inline-end-color-disabled);
        --gform-theme-local-color: var(--gform-theme-control-file-button-color-disabled)
    }

    .gform-theme--framework input[type=file]::file-selector-button {
        --gform-theme-local-background-color: var(--gform-theme-control-file-button-background-color);
        --gform-theme-local-border-inline-end-color: var(--gform-theme-control-file-button-border-inline-end-color);
        --gform-theme-local-border-inline-end-style: var(--gform-theme-control-file-button-border-inline-end-style);
        --gform-theme-local-border-inline-end-width: var(--gform-theme-control-file-button-border-inline-end-width);
        --gform-theme-local-border-inline-end: var(--gform-theme-local-border-inline-end-width) var(--gform-theme-local-border-inline-end-style) var(--gform-theme-local-border-inline-end-color);
        --gform-theme-local-color: var(--gform-theme-control-file-button-color);
        -webkit-border-end: var(--gform-theme-local-border-inline-end);
        background-color: var(--gform-theme-local-background-color);
        block-size: 100%;
        border: 0;
        border-end-start-radius: var(--gform-theme-control-file-button-border-radius);
        border-inline-end:var(--gform-theme-local-border-inline-end);border-start-start-radius: var(--gform-theme-control-file-button-border-radius);
        color: var(--gform-theme-local-color);
        font-family: var(--gform-theme-control-file-button-font-family);
        font-size: var(--gform-theme-control-file-button-font-size);
        font-style: var(--gform-theme-control-file-button-font-style);
        font-weight: var(--gform-theme-control-file-button-font-weight);
        inset-block-start: calc(var(--gform-theme-control-border-width)*-1);
        letter-spacing: var(--gform-theme-control-file-button-letter-spacing);
        line-height: var(--gform-theme-control-file-button-line-height);
        margin-inline:var(--gform-theme-control-file-button-margin-inline);padding-block: 0;
        padding-inline:var(--gform-theme-control-file-button-padding-inline);position: relative;
        -webkit-text-decoration: var(--gform-theme-control-file-button-text-decoration);
        text-decoration: var(--gform-theme-control-file-button-text-decoration);
        text-transform: var(--gform-theme-control-file-button-text-transform);
        transition: var(--gform-theme-control-file-button-transition)
    }

    .gform-theme--framework .gfield--input-type-fileupload .gform_drop_area,.gform-theme--framework .gfield--type-fileupload .gform_drop_area {
        --gform-theme-local-block-size: var(--gform-theme-control-file-drop-area-block-size);
        --gform-theme-local-border-radius: var(--gform-theme-control-file-drop-area-border-radius);
        --gform-theme-local-border-style: var(--gform-theme-control-file-drop-area-border-style);
        --gform-theme-local-color: var(--gform-theme-control-file-drop-area-color);
        --gform-theme-local-font-weight: var(--gform-theme-control-file-drop-area-font-weight);
        --gform-theme-local-line-height: var(--gform-theme-control-file-drop-area-line-height);
        --gform-theme-local-padding-inline: var(--gform-theme-control-file-drop-area-padding-inline);
        --gform-theme-local-padding-block: var(--gform-theme-control-file-drop-area-padding-block)
    }

    .gform-theme--framework .gfield--input-type-fileupload .gform_drop_area:before,.gform-theme--framework .gfield--type-fileupload .gform_drop_area:before {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-margin-after: var(--gform-theme-control-file-drop-area-icon-margin-block-end);
        color: var(--gform-theme-control-file-drop-area-icon-color);
        content: var(--gform-theme-icon-control-file-upload);
        display: block;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-control-file-drop-area-icon-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        margin-block-end:var(--gform-theme-control-file-drop-area-icon-margin-block-end);text-transform: none
    }

    .gform-theme--framework .gfield--input-type-fileupload .gform_drop_instructions,.gform-theme--framework .gfield--type-fileupload .gform_drop_instructions {
        -webkit-margin-after: var(--gform-theme-control-file-drop-area-instructions-margin-block-end);
        margin-block-end:var(--gform-theme-control-file-drop-area-instructions-margin-block-end)}

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview_list,.gform-theme--framework .gfield--type-fileupload .ginput_preview_list {
        -webkit-margin-before: var(--gform-theme-control-file-preview-area-margin-block-start);
        display: flex;
        flex-direction: column;
        gap: var(--gform-theme-control-file-preview-area-gap);
        margin-block-start:var(--gform-theme-control-file-preview-area-margin-block-start);width: 100%
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview_list:empty,.gform-theme--framework .gfield--type-fileupload .ginput_preview_list:empty {
        -webkit-margin-before: 0;
        margin-block-start:0}

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview,.gform-theme--framework .gfield--type-fileupload .ginput_preview {
        display: flex;
        flex-direction: column;
        font-family: var(--gform-theme-control-file-preview-file-font-family);
        font-size: var(--gform-theme-control-file-preview-file-font-size);
        font-style: var(--gform-theme-control-file-preview-file-font-style);
        font-weight: var(--gform-theme-control-file-preview-file-font-weight);
        gap: var(--gform-theme-control-file-preview-file-gap);
        letter-spacing: var(--gform-theme-control-file-preview-file-letter-spacing);
        line-height: var(--gform-theme-control-file-preview-file-line-height);
        position: relative
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_filename,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_filename {
        -webkit-padding-end: var(--gform-theme-control-file-preview-file-name-padding-inline-end);
        color: var(--gform-theme-control-file-preview-file-name-color);
        line-height: var(--gform-theme-control-file-preview-file-name-line-height);
        overflow: var(--gform-theme-control-file-preview-file-name-overflow);
        padding-inline-end:var(--gform-theme-control-file-preview-file-name-padding-inline-end);text-overflow: var(--gform-theme-control-file-preview-file-name-text-overflow);
        white-space: var(--gform-theme-control-file-preview-file-name-white-space)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_filesize,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_filesize {
        color: var(--gform-theme-control-file-preview-file-size-color)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progress,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progress {
        align-items: center;
        display: flex;
        gap: var(--gform-theme-control-file-upload-progress-ui-gap)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progress:after,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progress:after {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        block-size: var(--gform-theme-control-file-upload-progress-button-icon-size);
        color: var(--gform-theme-control-file-upload-progress-button-icon-color-complete);
        content: var(--gform-theme-icon-control-file-upload-completed);
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-control-file-upload-progress-button-icon-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        inline-size: var(--gform-theme-control-file-upload-progress-button-icon-size);
        line-height: 1;
        min-inline-size: var(--gform-theme-control-file-upload-progress-button-icon-size);
        opacity: 0;
        text-transform: none
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progress_complete:after,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progress_complete:after {
        opacity: 1
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progressbar,.gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progressbar_progress,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progressbar,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progressbar_progress {
        block-size: var(--gform-theme-control-file-upload-progress-bar-block-size);
        border-radius: var(--gform-theme-control-file-upload-progress-bar-border-radius)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progressbar,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progressbar {
        background-color: var(--gform-theme-control-file-upload-progress-bar-background-color);
        inline-size: 100%;
        position: relative
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_progressbar_progress,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_progressbar_progress {
        background-color: var(--gform-theme-control-file-upload-progress-bar-background-color-loading);
        inline-size: 1%;
        position: absolute;
        transition: var(--gform-theme-control-file-upload-progress-bar-transition)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_percent,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_percent {
        color: var(--gform-theme-control-file-upload-progress-text-color);
        font-size: var(--gform-theme-control-file-upload-progress-text-font-size);
        min-inline-size: var(--gform-theme-control-file-upload-progress-text-min-inline-size)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_cancel,.gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gform_delete_file,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_cancel,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gform_delete_file {
        inset-block-start: var(--gform-theme-control-file-upload-progress-button-inset-block-start);
        inset-inline-end: var(--gform-theme-control-file-upload-progress-button-inset-inline-end);
        position: var(--gform-theme-control-file-upload-progress-button-position)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gform_delete_file .dashicons:before,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gform_delete_file .dashicons:before {
        --gform-theme-control-button-icon: var(--gform-theme-icon-control-file-upload-remove)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_cancel,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_cancel {
        --gform-theme-local-font-size: var(--gform-theme-control-file-upload-progress-button-font-size-cancel)
    }

    .gform-theme--framework .gfield--input-type-fileupload .ginput_preview .gfield_fileupload_cancel:before,.gform-theme--framework .gfield--type-fileupload .ginput_preview .gfield_fileupload_cancel:before {
        --gform-theme-control-button-icon: var(--gform-theme-icon-control-file-upload-cancel)
    }

    .gform-theme--framework.ui-datepicker {
        -webkit-margin-before: var(--gform-theme-control-date-datepicker-margin-block-start);
        background-color: var(--gform-theme-control-date-datepicker-background-color);
        border-radius: var(--gform-theme-control-date-datepicker-border-radius);
        box-shadow: var(--gform-theme-control-date-datepicker-box-shadow);
        display: none;
        inline-size: var(--gform-theme-control-date-datepicker-inline-size);
        margin-block-start:var(--gform-theme-control-date-datepicker-margin-block-start);padding-block: var(--gform-theme-control-date-datepicker-padding-block);
        padding-inline:var(--gform-theme-control-date-datepicker-padding-inline)}

    .gform-theme--framework.ui-datepicker .ui-datepicker-header {
        align-items: stretch;
        display: flex;
        margin-block:unset;margin-inline:unset;padding-block:0;padding-inline:0;position: unset
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-next,.gform-theme--framework.ui-datepicker .ui-datepicker-prev {
        align-items: center;
        block-size: auto;
        cursor: pointer;
        display: flex;
        flex: none;
        inline-size: var(--gform-theme-control-date-datepicker-header-icons-inline-size);
        inset: unset;
        justify-content: center;
        position: relative
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-next:before,.gform-theme--framework.ui-datepicker .ui-datepicker-prev:before {
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-header-icons-color);
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-image: none;
        border: none;
        color: var(--gform-theme-local-color);
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-control-date-datepicker-header-icons-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        inset: unset;
        line-height: 1;
        text-transform: none;
        transform: unset
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-prev:before {
        content: var(--gform-theme-icon-control-datepicker-left)
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-next {
        order: 1
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-next:before {
        content: var(--gform-theme-icon-control-datepicker-right)
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-next-hover:before,.gform-theme--framework.ui-datepicker .ui-datepicker-prev-hover:before {
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-header-icons-color-hover)
    }

    .gform-theme--framework.ui-datepicker .ui-datepicker-title {
        align-items: center;
        color: var(--gform-theme-control-date-datepicker-title-color);
        display: flex;
        flex: auto;
        font-size: var(--gform-theme-control-date-datepicker-title-font-size);
        font-weight: var(--gform-theme-control-date-datepicker-title-font-weight);
        gap: 8px;
        line-height: var(--gform-theme-control-date-datepicker-title-line-height);
        margin-block:0;margin-inline:8px}

    .gform-theme--framework.ui-datepicker select.ui-datepicker-month,.gform-theme--framework.ui-datepicker select.ui-datepicker-year {
        background-image: var(--gform-theme-icon-control-select);
        background-position: var(--gform-theme-control-select-icon-position);
        background-repeat: no-repeat;
        background-size: var(--gform-theme-control-select-icon-size);
        box-shadow: var(--gform-theme-local-box-shadow);
        flex: auto;
        inline-size: auto;
        margin: 0;
        padding-inline:var(--gform-theme-local-padding-inline);text-align: var(--gform-theme-control-date-datepicker-dropdown-text-align)
    }

    .gform-theme--framework.ui-datepicker table {
        -webkit-margin-after: 0;
        -webkit-margin-before: 16px;
        margin-block-end:0;margin-block-start:16px}

    .gform-theme--framework.ui-datepicker table td,.gform-theme--framework.ui-datepicker table th {
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-color);
        block-size: 40px;
        color: var(--gform-theme-local-color);
        font-size: var(--gform-theme-local-font-size);
        font-weight: var(--gform-theme-local-font-weight);
        line-height: var(--gform-theme-local-line-height);
        padding-block:var(--gform-theme-control-date-datepicker-table-cell-padding);padding-inline: var(--gform-theme-control-date-datepicker-table-cell-padding)
    }

    .gform-theme--framework.ui-datepicker table th {
        --gform-theme-local-block-size: var(--gform-theme-control-date-datepicker-table-head-cell-block-size);
        --gform-theme-local-font-size: var(--gform-theme-control-date-datepicker-table-head-cell-font-size);
        --gform-theme-local-font-weight: var(--gform-theme-control-date-datepicker-table-head-cell-font-weight);
        --gform-theme-local-line-height: var(--gform-theme-control-date-datepicker-table-head-cell-line-height);
        vertical-align: middle
    }

    .gform-theme--framework.ui-datepicker table td {
        --gform-theme-local-block-size: var(--gform-theme-control-date-datepicker-table-cell-block-size);
        --gform-theme-local-font-size: var(--gform-theme-control-date-datepicker-table-cell-font-size);
        --gform-theme-local-font-weight: var(--gform-theme-control-date-datepicker-table-cell-font-weight);
        --gform-theme-local-line-height: var(--gform-theme-control-date-datepicker-table-cell-line-height)
    }

    .gform-theme--framework.ui-datepicker table td:not(.ui-state-disabled) {
        cursor: pointer
    }

    .gform-theme--framework.ui-datepicker table td a,.gform-theme--framework.ui-datepicker table td span {
        --gform-theme-local-background-color: transparent;
        --gform-theme-local-border: 0;
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color);
        align-items: center;
        background-color: var(--gform-theme-local-background-color);
        block-size: 100%;
        border: var(--gform-theme-local-border);
        border-radius: var(--gform-theme-control-date-datepicker-table-cell-content-border-radius);
        color: var(--gform-theme-local-color);
        display: flex;
        inline-size: 100%;
        justify-content: center;
        text-decoration: none
    }

    .gform-theme--framework.ui-datepicker table td:not(.ui-state-disabled):not(.ui-datepicker-current-day) a:hover {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-hover);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-hover)
    }

    .gform-theme--framework.ui-datepicker table td:not(.ui-state-disabled):not(.ui-datepicker-current-day) a:focus {
        --gform-theme-local-border: var(--gform-theme-control-date-datepicker-table-cell-content-border)
    }

    .gform-theme--framework.ui-datepicker table .ui-state-disabled a,.gform-theme--framework.ui-datepicker table .ui-state-disabled span {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-disabled);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-disabled)
    }

    .gform-theme--framework.ui-datepicker table .ui-datepicker-today a,.gform-theme--framework.ui-datepicker table .ui-datepicker-today span {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-hover);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-hover)
    }

    .gform-theme--framework.ui-datepicker table .ui-datepicker-today.ui-state-disabled a,.gform-theme--framework.ui-datepicker table .ui-datepicker-today.ui-state-disabled span {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-disabled);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-disabled)
    }

    .gform-theme--framework.ui-datepicker table .ui-datepicker-current-day a,.gform-theme--framework.ui-datepicker table .ui-datepicker-current-day span {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-selected);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-selected)
    }

    .gform-theme--framework.ui-datepicker table .ui-datepicker-current-day a:focus,.gform-theme--framework.ui-datepicker table .ui-datepicker-current-day a:hover {
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-selected)
    }

    .gform-theme--framework.ui-datepicker table .ui-datepicker-current-day.ui-state-disabled a,.gform-theme--framework.ui-datepicker table .ui-datepicker-current-day.ui-state-disabled span {
        --gform-theme-local-background-color: var(--gform-theme-control-date-datepicker-table-cell-content-background-color-disabled);
        --gform-theme-local-color: var(--gform-theme-control-date-datepicker-table-cell-content-color-disabled)
    }

    .gform-theme--framework.ui-datepicker.ui-datepicker-rtl select.ui-datepicker-month,.gform-theme--framework.ui-datepicker.ui-datepicker-rtl select.ui-datepicker-year {
        background-position: var(--gform-theme-control-select-icon-position)
    }

    .gform-theme--framework.ui-datepicker.ui-datepicker-rtl .ui-datepicker-next:before,.gform-theme--framework.ui-datepicker.ui-datepicker-rtl .ui-datepicker-prev:before {
        transform: none
    }

    .gform-theme--framework.ui-datepicker.ui-datepicker-rtl .ui-datepicker-prev:before {
        content: var(--gform-theme-icon-control-datepicker-right)
    }

    .gform-theme--framework.ui-datepicker.ui-datepicker-rtl .ui-datepicker-next:before {
        content: var(--gform-theme-icon-control-datepicker-left)
    }

    .gform-theme--framework .gfield:where(:not(.gfield--type-html):not(.gfield--type-section)) {
        line-height: 1
    }

    .gform-theme--framework .gfield--type-address .copy_values_option_container {
        display: inline-grid;
        gap: var(--gform-theme-field-choice-meta-spacing) 0;
        grid-template-columns: minmax(var(--gform-theme-control-choice-size),max-content) auto
    }

    .gform-theme--framework .gfield--type-address .copy_values_option_container+.ginput_container_address {
        -webkit-margin-before: var(--gform-theme-field-row-gap);
        margin-block-start:var(--gform-theme-field-row-gap)}

    .gform-theme--framework .gfield--type-choice .gfield_checkbox,.gform-theme--framework .gfield--type-choice .gfield_radio {
        display: flex;
        flex-direction: column;
        gap: var(--gform-theme-field-choice-spacing)
    }

    .gform-theme--framework .gfield--type-choice .gfield_checkbox>:last-child:where(:not(.gchoice)),.gform-theme--framework .gfield--type-choice .gfield_radio>:last-child:where(:not(.gchoice)) {
        -webkit-margin-before: var(--gform-theme-field-choice-meta-margin-block-start);
        align-self: self-start;
        margin-block-start:var(--gform-theme-field-choice-meta-margin-block-start)}

    .gform-theme--framework .gfield--type-choice .gchoice,.gform-theme--framework .gfield--type-choice .ginput_container_consent {
        display: inline-grid;
        gap: var(--gform-theme-field-choice-meta-spacing) 0;
        grid-template-columns: minmax(var(--gform-theme-control-choice-size),max-content) auto
    }

    .gform-theme--framework .gfield--type-choice .gchoice br,.gform-theme--framework .gfield--type-choice .ginput_container_consent br {
        display: none
    }

    .gform-theme--framework .gfield--type-choice .gchoice_other_control {
        --gform-theme-local-inline-size: auto;
        grid-column: span 2;
        max-inline-size: var(--gform-theme-field-choice-other-control-max-inline-size)
    }

    .gform-theme--framework .gfield--input-type-datepicker .ginput_container_date {
        align-content: flex-start;
        align-items: center;
        display: flex
    }

    .gform-theme--framework .gfield--input-type-datepicker .ginput_container_date input {
        --gform-theme-local-inline-size: auto
    }

    .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-default-icon .ginput_container_date img.ui-datepicker-trigger {
        display: none
    }

    .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-default-icon .ginput_container_date:after {
        --gform-theme-local-color: var(--gform-theme-field-date-icon-color);
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-margin-start: calc(var(--gform-theme-control-padding-inline)*-1);
        color: var(--gform-theme-local-color);
        content: var(--gform-theme-icon-control-datepicker);
        display: inline-block;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-icon-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        inset-block-start: 0;
        inset-inline-start: 0;
        line-height: 1;
        margin-inline-start:calc(var(--gform-theme-control-padding-inline)*-1);pointer-events: none;
        text-transform: none;
        transform: translateX(-100%)
    }

    html[dir=rtl] .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-default-icon .ginput_container_date:after {
        order: 1;
        transform: translateX(100%)
    }

    .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-default-icon .ginput_container_date:focus:after,.gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-default-icon .ginput_container_date:hover:after {
        --gform-theme-local-color: var(--gform-theme-field-date-icon-color-hover)
    }

    .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-custom-icon .ginput_container_date img.ui-datepicker-trigger {
        -webkit-margin-start: calc(var(--gform-theme-control-padding-inline)*-1);
        margin-inline-start:calc(var(--gform-theme-control-padding-inline)*-1);max-block-size: var(--gform-theme-field-date-custom-icon-max-block-size);
        max-inline-size: var(--gform-theme-field-date-custom-icon-max-inline-size);
        transform: translateX(-100%)
    }

    html[dir=rtl] .gform-theme--framework .gfield--input-type-datepicker.gfield--datepicker-custom-icon .ginput_container_date img.ui-datepicker-trigger {
        order: 1;
        transform: translateX(100%)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-list button.add_list_item,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-list button.delete_list_item {
        --gform-theme-local-block-size: var(--gform-theme-field-list-button-size);
        --gform-theme-local-border-radius: var(--gform-theme-field-list-button-border-radius);
        --gform-theme-local-column-gap: 0;
        --gform-theme-local-font-size: var(--gform-theme-field-list-button-font-size);
        --gform-theme-local-inline-size: var(--gform-theme-field-list-button-size);
        --gform-theme-local-letter-spacing: 0;
        --gform-theme-local-line-height: 1;
        --gform-theme-local-min-block-size: auto;
        --gform-theme-local-padding-block: var(--gform-theme-field-list-button-padding-block);
        --gform-theme-local-padding-inline: var(--gform-theme-field-list-button-padding-inline)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-list button.add_list_item:before {
        --gform-theme-local-content: var(--gform-theme-icon-control-list-item-add)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-list button.delete_list_item:before {
        --gform-theme-local-content: var(--gform-theme-icon-control-list-item-remove)
    }

    .gform-theme--framework .gf_page_steps,.gform-theme--framework .gf_progressbar_wrapper {
        -webkit-margin-after: var(--gform-theme-field-page-progress-margin-block-end);
        margin-block-end:var(--gform-theme-field-page-progress-margin-block-end)}

    .gform-theme--framework .gf_progressbar_title,.gform-theme--framework .gf_step_label,.gform-theme--framework .gf_step_number {
        --gform-theme-local-color: var(--gform-theme-field-page-progress-color);
        --gform-theme-local-font-family: var(--gform-theme-field-page-progress-font-family);
        --gform-theme-local-font-size: var(--gform-theme-field-page-progress-font-size);
        --gform-theme-local-font-style: var(--gform-theme-field-page-progress-font-style);
        --gform-theme-local-font-weight: var(--gform-theme-field-page-progress-font-weight);
        --gform-theme-local-letter-spacing: var(--gform-theme-field-page-progress-letter-spacing);
        --gform-theme-local-line-height: var(--gform-theme-field-page-progress-line-height);
        --gform-theme-local-text-transform: none;
        color: var(--gform-theme-local-color);
        font-family: var(--gform-theme-local-font-family);
        font-size: var(--gform-theme-local-font-size);
        font-style: var(--gform-theme-local-font-style);
        font-weight: var(--gform-theme-local-font-weight);
        letter-spacing: var(--gform-theme-local-letter-spacing);
        line-height: var(--gform-theme-local-line-height);
        text-transform: var(--gform-theme-local-text-transform)
    }

    .gform-theme--framework .gf_progressbar_title {
        -webkit-margin-after: var(--gform-theme-field-page-progress-title-margin-block-end);
        margin-block-end:var(--gform-theme-field-page-progress-title-margin-block-end)}

    .gform-theme--framework .gf_progressbar {
        background-color: var(--gform-theme-field-page-progress-bar-background-color);
        border-radius: var(--gform-theme-field-page-progress-bar-border-radius)
    }

    .gform-theme--framework .gf_progressbar span {
        clip: rect(0,0,0,0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px
    }

    .gform-theme--framework .gf_progressbar .gf_progressbar_percentage {
        block-size: var(--gform-theme-field-page-progress-bar-block-size);
        border-radius: var(--gform-theme-field-page-progress-bar-border-radius)
    }

    .gform-theme--framework .gf_progressbar .percentbar_blue {
        background-color: var(--gform-theme-field-page-progress-bar-background-color-blue)
    }

    .gform-theme--framework .gf_progressbar .percentbar_gray {
        background-color: var(--gform-theme-field-page-progress-bar-background-color-gray)
    }

    .gform-theme--framework .gf_progressbar .percentbar_green {
        background-color: var(--gform-theme-field-page-progress-bar-background-color-green)
    }

    .gform-theme--framework .gf_progressbar .percentbar_orange {
        background-color: var(--gform-theme-field-page-progress-bar-background-color-orange)
    }

    .gform-theme--framework .gf_progressbar .percentbar_red {
        background-color: var(--gform-theme-field-page-progress-bar-background-color-red)
    }

    .gform-theme--framework .gf_progressbar .percentbar_spring {
        background: var(--gform-theme-field-page-progress-bar-background-gradient-spring)
    }

    .gform-theme--framework .gf_progressbar .percentbar_blues {
        background: var(--gform-theme-field-page-progress-bar-background-gradient-blues)
    }

    .gform-theme--framework .gf_progressbar .percentbar_rainbow {
        background: var(--gform-theme-field-page-progress-bar-background-gradient-rainbow)
    }

    .gform-theme--framework .gf_step {
        align-items: center;
        display: flex;
        gap: var(--gform-theme-field-page-steps-step-gap);
        position: relative
    }

    .gform-theme--framework .gf_step_label {
        --gform-theme-local-text-transform: var(--gform-theme-field-page-progress-text-transform)
    }

    .gform-theme--framework .gf_step_number {
        --gform-theme-local-background-color: var(--gform-theme-field-page-steps-number-background-color);
        --gform-theme-local-border-color: var(--gform-theme-field-page-steps-number-border-color);
        --gform-theme-local-border: var(--gform-theme-field-page-steps-number-border-width) var(--gform-theme-field-page-steps-number-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-border-radius: var(--gform-theme-field-page-steps-number-border-radius);
        --gform-theme-local-color: var(--gform-theme-field-page-steps-number-color);
        align-content: center;
        background-color: var(--gform-theme-local-background-color);
        block-size: var(--gform-theme-field-page-steps-number-size);
        border: var(--gform-theme-local-border);
        border-radius: var(--gform-theme-local-border-radius);
        color: var(--gform-theme-local-color);
        display: inline-grid;
        inline-size: var(--gform-theme-field-page-steps-number-size);
        justify-content: center;
        min-inline-size: var(--gform-theme-field-page-steps-number-size);
        place-content: center
    }

    .gform-theme--framework .gf_step_active .gf_step_number {
        --gform-theme-local-background-color: var(--gform-theme-field-page-steps-number-background-color-active);
        --gform-theme-local-border-color: var(--gform-theme-field-page-steps-number-border-color-active);
        --gform-theme-local-color: var(--gform-theme-field-page-steps-number-color-active)
    }

    .gform-theme--framework .gf_step_completed .gf_step_number {
        --gform-theme-local-background-color: var(--gform-theme-field-page-steps-number-background-color-complete);
        --gform-theme-local-border-color: var(--gform-theme-field-page-steps-number-border-color-complete);
        --gform-theme-local-color: var(--gform-theme-field-page-steps-number-color-complete)
    }

    .gform-theme--framework .gf_step_completed .gf_step_number:after {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        align-content: center;
        background-color: var(--gform-theme-field-page-steps-number-background-color-complete);
        block-size: var(--gform-theme-field-page-steps-number-size);
        border: var(--gform-theme-field-page-steps-number-border-width) var(--gform-theme-field-page-steps-number-border-style) var(--gform-theme-field-page-steps-number-border-color-complete);
        border-radius: var(--gform-theme-field-page-steps-number-border-radius);
        color: var(--gform-theme-field-page-steps-number-color-complete);
        content: var(--gform-theme-icon-control-page-numbers-complete);
        display: inline-grid;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-field-page-steps-icon-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        inline-size: var(--gform-theme-field-page-steps-number-size);
        inset-block-start: 0;
        inset-inline-start: 0;
        justify-content: center;
        line-height: 1;
        place-content: center;
        position: absolute;
        text-transform: none
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button .dashicons,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button .dashicons:before,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:after,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:before {
        --gform-theme-local-color: var(--gform-theme-control-icon-color)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:hover,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:hover .dashicons,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:hover .dashicons:before,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:hover:after,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:hover:before {
        --gform-theme-local-color: var(--gform-theme-control-icon-color-hover)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:focus,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:focus .dashicons,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:focus .dashicons:before,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:focus:after,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:focus:before {
        --gform-theme-local-color: var(--gform-theme-control-icon-color-focus)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:disabled,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:disabled .dashicons,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:disabled .dashicons:before,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:disabled:after,.gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button:disabled:before {
        --gform-theme-local-color: var(--gform-theme-control-icon-color-disabled)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button .dashicons.dashicons-visibility:before {
        --gform-theme-local-content: var(--gform-theme-icon-control-password-hidden)
    }

    .gform-theme--framework.gform-theme.gform_wrapper .gfield--type-password button.gform_show_password.gform-theme-button .dashicons.dashicons-hidden:before {
        --gform-theme-local-content: var(--gform-theme-icon-control-password-visible)
    }

    .gform-theme--framework .gfield_password_strength {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color);
        --gform-theme-local-border-style: var(--gform-theme-field-password-strength-border-style);
        --gform-theme-local-border-width: var(--gform-theme-field-password-strength-border-width);
        --gform-theme-local-border: var(--gform-theme-local-border-width) var(--gform-theme-local-border-style) var(--gform-theme-local-border-color);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color);
        -webkit-margin-before: var(--gform-theme-field-password-strength-margin-block-start);
        background-color: var(--gform-theme-local-background-color);
        border: var(--gform-theme-local-border);
        border-radius: var(--gform-theme-field-password-strength-border-radius);
        color: var(--gform-theme-local-color);
        font-family: var(--gform-theme-field-password-strength-font-family);
        font-size: var(--gform-theme-field-password-strength-font-size);
        font-style: var(--gform-theme-field-password-strength-font-style);
        font-weight: var(--gform-theme-field-password-strength-font-weight);
        letter-spacing: var(--gform-theme-field-password-strength-letter-spacing);
        line-height: var(--gform-theme-field-password-strength-line-height);
        margin-block-start:var(--gform-theme-field-password-strength-margin-block-start);padding-block: var(--gform-theme-field-password-strength-padding-block);
        padding-inline:var(--gform-theme-field-password-strength-padding-inline);position: relative;
        text-align: var(--gform-theme-field-password-strength-text-align);
        transition: var(--gform-theme-field-password-strength-transition)
    }

    .gform-theme--framework .gfield_password_strength:after,.gform-theme--framework .gfield_password_strength:before {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color);
        --gform-theme-local-block-size: var(--gform-theme-field-password-strength-indicator-block-size);
        --gform-theme-local-border-radius: var(--gform-theme-field-password-strength-indicator-border-radius);
        --gform-theme-local-content: var(--gform-theme-field-password-strength-indicator-content);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size);
        --gform-theme-local-inset-block-start: var(--gform-theme-field-password-strength-indicator-inset-block-start);
        --gform-theme-local-inset-inline-start: var(--gform-theme-field-password-strength-indicator-inset-inline-start);
        --gform-theme-local-position: var(--gform-theme-field-password-strength-indicator-position);
        --gform-theme-local-transform: var(--gform-theme-field-password-strength-indicator-transform);
        --gform-theme-local-transition: none;
        background-color: var(--gform-theme-local-background-color);
        block-size: var(--gform-theme-local-block-size);
        border-radius: var(--gform-theme-local-border-radius);
        content: var(--gform-theme-local-content);
        display: var(--gform-theme-field-password-strength-indicator-display);
        inline-size: var(--gform-theme-local-inline-size);
        inset-block-start: var(--gform-theme-local-inset-block-start);
        inset-inline-start: var(--gform-theme-local-inset-inline-start);
        position: var(--gform-theme-local-position);
        transform: var(--gform-theme-local-transform);
        transition: var(--gform-theme-local-transition)
    }

    .gform-theme--framework .gfield_password_strength:after {
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-blank);
        --gform-theme-local-transition: var(--gform-theme-field-password-strength-indicator-transition)
    }

    .gform-theme--framework .gfield_password_strength.mismatch {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color-mismatch);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color-mismatch);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color-mismatch)
    }

    .gform-theme--framework .gfield_password_strength.mismatch:after {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color-mismatch);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-mismatch)
    }

    .gform-theme--framework .gfield_password_strength.short {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color-short);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color-short);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color-short)
    }

    .gform-theme--framework .gfield_password_strength.short:after {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color-short);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-short)
    }

    .gform-theme--framework .gfield_password_strength.bad {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color-bad);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color-bad);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color-bad)
    }

    .gform-theme--framework .gfield_password_strength.bad:after {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color-bad);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-bad)
    }

    .gform-theme--framework .gfield_password_strength.good {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color-good);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color-good);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color-good)
    }

    .gform-theme--framework .gfield_password_strength.good:after {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color-good);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-good)
    }

    .gform-theme--framework .gfield_password_strength.strong {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-background-color-strong);
        --gform-theme-local-border-color: var(--gform-theme-field-password-strength-border-color-strong);
        --gform-theme-local-color: var(--gform-theme-field-password-strength-color-strong)
    }

    .gform-theme--framework .gfield_password_strength.strong:after {
        --gform-theme-local-background-color: var(--gform-theme-field-password-strength-indicator-background-color-strong);
        --gform-theme-local-inline-size: var(--gform-theme-field-password-strength-indicator-inline-size-strong)
    }

    .gform-theme--framework .gfield--type-product .ginput_product_price {
        --gform-theme-local-color: var(--gform-theme-field-product-price-color)
    }

    .gform-theme--framework .gfield--type-product input[type].ginput_product_price {
        --gform-theme-local-display: inline-block
    }

    .gform-theme--framework .gfield--type-product .ginput_quantity {
        --gform-theme-local-inline-size: var(--gform-theme-field-product-quantity-inline-size);
        -webkit-margin-after: var(--gform-theme-field-product-quantity-margin-block-end);
        margin-block-end:var(--gform-theme-field-product-quantity-margin-block-end)}

    .gform-theme--framework .gfield--type-product .ginput_container_product_calculation,.gform-theme--framework .gfield--type-product .ginput_container_singleproduct {
        display: flex;
        flex-direction: column
    }

    .gform-theme--framework .gfield--type-product .ginput_container_product_calculation .ginput_product_price_wrapper,.gform-theme--framework .gfield--type-product .ginput_container_singleproduct .ginput_product_price_wrapper {
        order: 2
    }

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_cell:not(:first-child),.gform-theme--framework .gfield--type-repeater .gfield_repeater_item+.gfield_repeater_item {
        -webkit-margin-before: var(--gform-theme-field-repeater-row-gap);
        margin-block-start:var(--gform-theme-field-repeater-row-gap)}

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_item+.gfield_repeater_item {
        position: relative
    }

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_item+.gfield_repeater_item:before {
        background-color: var(--gform-theme-field-repeater-separator-color);
        block-size: 1px;
        content: "";
        display: block;
        inline-size: 100%;
        inset-block-start: calc(0px - var(--gform-theme-field-repeater-row-gap)/2);
        position: absolute
    }

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_buttons {
        -webkit-margin-before: var(--gform-theme-form-footer-margin-block-start);
        margin-block-start:var(--gform-theme-form-footer-margin-block-start)}

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_buttons .gform-theme-button.gform-theme-button--secondary.add_repeater_item {
        -webkit-margin-end: var(--gform-theme-field-repeater-button-inline-gap);
        margin-inline-end:var(--gform-theme-field-repeater-button-inline-gap)}

    .gform-theme--framework .gfield--type-repeater .gfield_repeater_wrapper {
        -webkit-border-start: var(--gform-theme-field-repeater-nested-border-size) var(--gform-theme-field-repeater-nested-border-style) var(--gform-theme-field-repeater-nested-border-color);
        -webkit-padding-start: var(--gform-theme-field-repeater-nested-padding-inline-start);
        border-inline-start:var(--gform-theme-field-repeater-nested-border-size) var(--gform-theme-field-repeater-nested-border-style) var(--gform-theme-field-repeater-nested-border-color);border-inline-start-style: var(--gform-theme-field-repeater-nested-border-style);
        padding-inline-start:var(--gform-theme-field-repeater-nested-padding-inline-start)}

    .gform-theme--framework .gfield--type-section {
        -webkit-border-after: var(--gform-theme-field-section-border-width) var(--gform-theme-field-section-border-style) var(--gform-theme-field-section-border-color);
        -webkit-padding-after: var(--gform-theme-field-section-padding-block-end);
        border-block-end:var(--gform-theme-field-section-border-width) var(--gform-theme-field-section-border-style) var(--gform-theme-field-section-border-color);padding-block-end: var(--gform-theme-field-section-padding-block-end)
    }

    .gform-theme--framework .gform_validation_errors {
        background-color: var(--gform-theme-form-validation-background-color);
        border: var(--gform-theme-form-validation-border-width) var(--gform-theme-form-validation-border-style) var(--gform-theme-form-validation-border-color);
        border-radius: var(--gform-theme-form-validation-border-radius);
        box-shadow: var(--gform-theme-form-validation-box-shadow);
        display: flex;
        flex-direction: column;
        gap: var(--gform-theme-form-validation-gap);
        margin-block:var(--gform-theme-form-validation-margin-block);padding-block: var(--gform-theme-form-validation-padding-block);
        padding-inline:var(--gform-theme-form-validation-padding-inline)}

    .gform-theme--framework .gform_validation_errors .gform_submission_error {
        color: var(--gform-theme-form-validation-heading-color);
        display: flex;
        flex-direction: column;
        font-family: var(--gform-theme-form-validation-heading-font-family);
        font-size: var(--gform-theme-form-validation-heading-font-size);
        font-weight: var(--gform-theme-form-validation-heading-font-weight);
        gap: var(--gform-theme-form-validation-heading-gap);
        line-height: var(--gform-theme-form-validation-heading-line-height)
    }

    .gform-theme--framework .gform_validation_errors .gform-icon {
        speak: never;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        align-content: center;
        background-color: var(--gform-theme-form-validation-heading-icon-background-color);
        block-size: var(--gform-theme-form-validation-heading-icon-size);
        border-color: var(--gform-theme-form-validation-heading-icon-border-color);
        border-radius: var(--gform-theme-form-validation-heading-icon-border-radius);
        border-style: var(--gform-theme-form-validation-heading-icon-border-style);
        border-width: var(--gform-theme-form-validation-heading-icon-border-width);
        color: var(--gform-theme-form-validation-heading-icon-color);
        display: inline-grid;
        font-family: var(--gform-theme-icon-font-family)!important;
        font-size: var(--gform-theme-form-validation-heading-icon-font-size);
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        inline-size: var(--gform-theme-form-validation-heading-icon-size);
        justify-content: center;
        line-height: 1;
        place-content: center;
        text-transform: none
    }

    .gform-theme--framework .gform_validation_errors .gform-icon:before {
        content: var(--gform-theme-icon-tooltip-error)
    }

    .gform-theme--framework .gform_validation_errors ol {
        color: var(--gform-theme-form-validation-summary-color);
        font-family: var(--gform-theme-form-validation-summary-font-family);
        font-size: var(--gform-theme-form-validation-summary-font-size);
        font-weight: var(--gform-theme-form-validation-summary-font-weight);
        line-height: var(--gform-theme-form-validation-summary-line-height);
        list-style-type: disc;
        margin-block:0;margin-inline:0;padding-inline:var(--gform-theme-form-validation-padding-inline)}

    .gform-theme--framework .gform_validation_errors ol li+li {
        -webkit-margin-before: 4px;
        margin-block-start:4px}

    .gform-theme--framework .gform_validation_errors ol a {
        color: var(--gform-theme-form-validation-summary-color);
        -webkit-text-decoration: var(--gform-theme-form-validation-summary-item-link-text-decoration);
        text-decoration: var(--gform-theme-form-validation-summary-item-link-text-decoration)
    }

    @media(min-width: 640px) {
        .gform-theme--framework .gform_validation_errors .gform_submission_error {
            align-items:center;
            flex-direction: row
        }

        .gform-theme--framework .gform_validation_errors ol {
            padding-inline:var(--gform-theme-form-validation-summary-padding-inline)}
    }

    .gform-theme--framework .gform_required_legend .gfield_required {
        color: var(--gform-theme-color-danger)
    }

    .gform-theme--framework .gform-loader {
        border-block-end-color:var(--gform-theme-form-spinner-foreground-color);border-block-start-color: var(--gform-theme-form-spinner-background-color);
        border-inline-end-color:var(--gform-theme-form-spinner-background-color);border-inline-start-color: var(--gform-theme-form-spinner-foreground-color)
    }

    .gform-theme--framework .gform_save_link svg {
        display: none
    }

    .gform-theme--framework .gform_save_link:before {
        --gform-theme-control-button-icon: var(--gform-theme-icon-control-save-continue)
    }

    .gform-theme--framework .field_description_below .gfield_description:where(:not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message)) {
        -webkit-margin-before: var(--gform-theme-description-spacing);
        margin-block-start:var(--gform-theme-description-spacing)}

    .gform-theme--framework .field_description_below .gfield_description: where(.gfield_creditcard_warning_message) {
        -webkit-margin-after:var(--gform-theme-description-spacing);
        margin-block-end:var(--gform-theme-description-spacing)}

    .gform-theme--framework .field_description_below.gfield--type-choice .gfield_description: where(:not(.gfield_validation_message)) {
        -webkit-margin-before:var(--gform-theme-description-choice-field-spacing);
        margin-block-start:var(--gform-theme-description-choice-field-spacing)}

    .gform-theme--framework .field_description_above .gfield_description: where([class=gfield_description],.gfield_creditcard_warning_message) {
        -webkit-margin-after:var(--gform-theme-description-spacing);
        margin-block-end:var(--gform-theme-description-spacing)}

    .gform-theme--framework .field_description_above .gfield_description: where(:not([class=gfield_description]):not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message):not(.gfield_consent_description)) {
        -webkit-margin-before:var(--gform-theme-description-spacing);
        margin-block-start:var(--gform-theme-description-spacing)}

    .gform-theme--framework .field_description_above.gfield--type-choice .gfield_description: where(:not(.gfield_validation_message)) {
        -webkit-margin-after:var(--gform-theme-description-choice-field-spacing);
        margin-block-end:var(--gform-theme-description-choice-field-spacing)}

    .gform-theme--framework .left_label .gfield_description: where(:not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message)),.gform-theme--framework .right_label .gfield_description:where(:not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message)) {
        margin-block:var(--gform-theme-description-spacing) 0
    }

    @media(min-width: 640px) {
        .gform-theme--framework .left_label .gfield_description:where(:not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message)),.gform-theme--framework .right_label .gfield_description:where(:not(.ginput_counter_tinymce):not(.gfield_creditcard_warning_message)) {
            -webkit-padding-before:var(--gform-theme-description-spacing);
            margin-block:0;margin-inline:auto 0;padding-block-start:var(--gform-theme-description-spacing)}
    }

    .gform-theme--framework .left_label .gfield--type-choice .gfield_description: where(:not(.gfield_validation_message)),.gform-theme--framework .right_label .gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)) {
        margin-block:var(--gform-theme-description-choice-field-spacing) 0
    }

    @media(min-width: 640px) {
        .gform-theme--framework .left_label .gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)),.gform-theme--framework .right_label .gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)) {
            -webkit-padding-before:var(--gform-theme-description-choice-field-spacing);
            margin-block:0;padding-block-start:var(--gform-theme-description-choice-field-spacing)}
    }

    .gform-theme--framework .left_label .hidden_label.field_description_above .gfield_description: where([class=gfield_description]),.gform-theme--framework .right_label .hidden_label.field_description_above .gfield_description:where([class=gfield_description]) {
        margin-block:0 var(--gform-theme-description-spacing)
    }

    @media(min-width: 640px) {
        .gform-theme--framework .left_label .hidden_label.field_description_above .gfield_description:where([class=gfield_description]),.gform-theme--framework .right_label .hidden_label.field_description_above .gfield_description:where([class=gfield_description]) {
            margin-block:0;
            padding-block:0 var(--gform-theme-description-spacing)}
    }

    .gform-theme--framework .left_label .hidden_label.field_description_above.gfield--type-choice .gfield_description: where(:not(.gfield_validation_message)),.gform-theme--framework .right_label .hidden_label.field_description_above.gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)) {
        margin-block:0 var(--gform-theme-description-choice-field-spacing)
    }

    @media(min-width: 640px) {
        .gform-theme--framework .left_label .hidden_label.field_description_above.gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)),.gform-theme--framework .right_label .hidden_label.field_description_above.gfield--type-choice .gfield_description:where(:not(.gfield_validation_message)) {
            margin-block:0;
            padding-block:0 var(--gform-theme-description-choice-field-spacing)}
    }

    .gform-theme--framework .gfield_list_group_item: before,.gform-theme--framework .gform-field-label:where(:not([class*=gform-field-label--type-])) {
        --gform-theme-local-margin-block:0 var(--gform-theme-label-spacing-primary)
    }

    .gform-theme--framework .gfield--type-choice.field_description_above.gfield--no-description .gform-field-label:where(:not([class*=gform-field-label--type-])),.gform-theme--framework .gfield--type-choice.field_description_below .gform-field-label:where(:not([class*=gform-field-label--type-])) {
        --gform-theme-local-margin-block: 0 var(--gform-theme-label-choice-field-spacing-primary)
    }

    @media(min-width: 640px) {
        .gform-theme--framework .left_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)),.gform-theme--framework .right_label .gform-field-label:where(:not([class*=gform-field-label--type-]):not(.gfield_header_item):not(.ginput_quantity_label)) {
            --gform-theme-local-margin-block:0;
            --gform-theme-local-margin-inline: 0;
            -webkit-padding-end: var(--gform-theme-label-spacing-primary);
            padding-inline-end:var(--gform-theme-label-spacing-primary)}
    }

    .gform-theme--framework .gform-field-label--type-inline {
        --gform-theme-local-margin-inline: var(--gform-theme-label-spacing-horizontal-secondary) 0;
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-vertical-secondary) 0
    }

    .gform-theme--framework .gform-field--size-sm .gform-field-label--type-inline {
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-vertical-sm-secondary)
    }

    .gform-theme--framework .gform-field--size-md .gform-field-label--type-inline {
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-vertical-md-secondary)
    }

    .gform-theme--framework .gform-field--size-lg .gform-field-label--type-inline {
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-vertical-lg-secondary)
    }

    .gform-theme--framework .gform-field--size-xl .gform-field-label--type-inline {
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-vertical-xl-secondary)
    }

    .gform-theme--framework .field_sublabel_below .gform-field-label--type-sub {
        --gform-theme-local-margin-block: var(--gform-theme-label-spacing-tertiary) 0
    }

    .gform-theme--framework .field_sublabel_above .gform-field-label--type-sub {
        --gform-theme-local-margin-block: 0 var(--gform-theme-label-spacing-tertiary)
    }
}

@media all {
}

@media all {
    .gform_wrapper.gravity-theme fieldset,.gform_wrapper.gravity-theme legend {
        background: 0 0;
        padding: 0
    }

    .gform_wrapper.gravity-theme fieldset {
        border: none;
        display: block;
        margin: 0
    }

    .gform_wrapper.gravity-theme legend {
        margin-left: 0;
        margin-right: 0
    }

    @font-face {
        font-display: block;
        font-family: gform-icons-theme;
        font-style: normal;
        font-weight: 400;
        src: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-theme.woff2?cocjn) format("woff2"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-theme.ttf?cocjn) format("truetype"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-theme.woff?cocjn) format("woff"),url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../fonts/gform-icons-theme.svg?cocjn#gform-icons-theme) format("svg")
    }

    .gform-icon {
        speak: never;
        font-feature-settings: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: gform-icons-theme!important;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none
    }

    .gform-icon--left-arrow:before {
        color: #2f4054;
        content: "\e910"
    }

    .gform-icon--right-arrow:before {
        color: #2f4054;
        content: "\e91b"
    }

    .gform-icon--circle-error:before {
        content: "\e91a"
    }

    .gform-icon--close-small:before {
        content: "\e905"
    }

    .gform-icon--info:before {
        content: "\e900"
    }

    .gform-icon--verified:before {
        content: "\e901"
    }

    .gform-icon--circle-close:before {
        content: "\e903"
    }

    .gform-icon--close-big:before {
        content: "\e904"
    }

    .gform-icon--down-arrow:before {
        content: "\e906"
    }

    .gform-icon--format-bold:before {
        content: "\e907"
    }

    .gform-icon--format-italic:before {
        content: "\e908"
    }

    .gform-icon--format-list-bulleted:before {
        content: "\e909"
    }

    .gform-icon--format-list-numbered:before {
        content: "\e90a"
    }

    .gform-icon--insert-link:before {
        content: "\e90b"
    }

    .gform-icon--line:before {
        content: "\e90c"
    }

    .gform-icon--password-eye:before {
        content: "\e90d"
    }

    .gform-icon--password-eye-closed:before {
        content: "\e90e"
    }

    .gform-icon--redo:before {
        content: "\e90f"
    }

    .gform-icon--schedule:before {
        content: "\e911"
    }

    .gform-icon--clock:before {
        content: "\e912"
    }

    .gform-icon--search:before {
        content: "\e913"
    }

    .gform-icon--star:before {
        content: "\e914"
    }

    .gform-icon--star-border:before {
        content: "\e915"
    }

    .gform-icon--star-half:before {
        content: "\e916"
    }

    .gform-icon--check:before {
        content: "\e917"
    }

    .gform-icon--undo:before {
        content: "\e918"
    }

    .gform-icon--unfold-more:before {
        content: "\e919"
    }

    .gform-icon--create:before {
        content: "\e91c"
    }

    .gform-icon--cog:before {
        content: "\e91d"
    }

    .gform-icon--circle-check:before {
        content: "\e902"
    }

    .gform_wrapper.gravity-theme .gform-ul-reset {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .gform_wrapper.gravity-theme .gform-text-input-reset,.gform_wrapper.gravity-theme input.gform-text-input-reset,body[class*=avada] .gform_wrapper.gravity-theme input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]).gform-text-input-reset {
        background-color: transparent;
        border: transparent;
        border-radius: 0;
        font-family: inherit;
        font-size: inherit;
        outline: none;
        padding: inherit
    }

    .gform_wrapper.gravity-theme .gform_drop_area {
        background: rgba(0,0,0,.02);
        border: 1px dashed #ccc;
        border-radius: 4px;
        margin-bottom: 8px;
        padding: 32px;
        text-align: center
    }

    .gform_wrapper.gravity-theme .gform_drop_instructions {
        display: block;
        margin-bottom: 8px
    }

    .gform_wrapper.gravity-theme .gform_delete,.gform_wrapper.gravity-theme .gform_delete_file {
        cursor: pointer;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gform_delete_file {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        background: 0 0;
        border: none
    }

    .gform_wrapper.gravity-theme .gfield_fileupload_filesize {
        padding: 0 6px
    }

    .gform_wrapper.gravity-theme .gfield_validation_message ul {
        margin: 16px 0;
        padding-left: 24px
    }

    .gform_wrapper.gravity-theme .gfield_validation_message ul:empty {
        display: none
    }

    .gform_wrapper.gravity-theme .ginput_preview {
        margin: 16px 0
    }

    .gform_wrapper.gravity-theme .gform_fileupload_rules {
        display: block;
        margin-top: 8px
    }

    .gform_wrapper.gravity-theme .ginput_container_password>span {
        position: relative
    }

    .gform_wrapper.gravity-theme .gform_show_password:focus {
        outline: none
    }

    .gform_wrapper.gravity-theme .gform_show_password {
        background-color: inherit;
        border: none;
        cursor: pointer;
        height: 100%;
        padding: 0;
        position: absolute;
        right: 20px;
        top: 0
    }

    .gform_wrapper.gravity-theme .password_input_container {
        display: block;
        position: relative
    }

    .gform_wrapper.gravity-theme .gfield_password_strength {
        background-color: #eee;
        border: solid #ddd;
        border-width: 1px 1px 3px;
        margin-top: 8px;
        padding: 8px;
        text-align: center
    }

    .gform_wrapper.gravity-theme .gfield_password_strength.mismatch,.gform_wrapper.gravity-theme .gfield_password_strength.short {
        background-color: #ffa0a0;
        border-bottom: 3px solid;
        border-color: #f04040
    }

    .gform_wrapper.gravity-theme .gfield_password_strength.bad {
        background-color: #ffb78c;
        border-bottom: 3px solid;
        border-color: #ff853c
    }

    .gform_wrapper.gravity-theme .gfield_password_strength.good {
        background-color: #ffec8b;
        border-bottom: 3px solid;
        border-color: #fc0
    }

    .gform_wrapper.gravity-theme .gfield_password_strength.strong {
        background-color: #c3ff88;
        border-bottom: 3px solid;
        border-color: #8dff1c
    }

    .gform_wrapper.gravity-theme .field_sublabel_above .gfield_password_strength {
        margin-top: 16px
    }

    .gravity-theme.ui-datepicker {
        background-color: #fff;
        border: 1px solid rgba(0,0,0,.1);
        box-shadow: 0 1px 5px rgba(0,0,0,.1);
        display: none;
        margin: 2.4px;
        padding: 8px
    }

    .gravity-theme.ui-datepicker[style] {
        z-index: 9999!important
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header {
        border-bottom: 1px solid rgba(0,0,0,.1);
        margin: 0 -8px 8px;
        padding: 0 8px 8px;
        position: relative
    }

    .gravity-theme.ui-datepicker .ui-datepicker-next,.gravity-theme.ui-datepicker .ui-datepicker-prev {
        cursor: pointer;
        position: absolute
    }

    .gravity-theme.ui-datepicker .ui-datepicker-next:before,.gravity-theme.ui-datepicker .ui-datepicker-prev:before {
        border-style: solid;
        border-width: .18em .18em 0 0;
        content: "";
        display: inline-block;
        height: .55em;
        left: .15em;
        position: relative;
        top: .3em;
        transform: rotate(-135deg);
        vertical-align: top;
        width: .55em
    }

    .gravity-theme.ui-datepicker .ui-datepicker-next .ui-icon,.gravity-theme.ui-datepicker .ui-datepicker-prev .ui-icon {
        display: none
    }

    .gravity-theme.ui-datepicker .ui-datepicker-prev {
        left: 16px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-next {
        right: 16px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-next:before {
        left: 0;
        transform: rotate(45deg)
    }

    .gravity-theme.ui-datepicker .ui-datepicker-title {
        text-align: center
    }

    .gravity-theme.ui-datepicker .ui-datepicker-title select {
        margin: 0 4px
    }

    .gravity-theme.ui-datepicker .ui-datepicker table {
        border-spacing: 0;
        margin: 0
    }

    .gravity-theme.ui-datepicker .ui-datepicker thead {
        font-size: .85em
    }

    .gravity-theme.ui-datepicker .ui-datepicker td {
        padding: 0;
        width: 35.2px
    }

    .gravity-theme.ui-datepicker a.ui-state-default {
        border-radius: 50%;
        color: #222;
        display: block;
        line-height: 35.2px;
        text-align: center;
        text-decoration: none;
        width: 100%
    }

    .gravity-theme.ui-datepicker a.ui-state-default:hover {
        background-color: rgba(0,0,0,.1)
    }

    .gravity-theme.ui-datepicker a.ui-state-active,.gravity-theme.ui-datepicker a.ui-state-active:hover {
        background-color: #3498db;
        color: #fff
    }

    .gform_wrapper.gravity-theme ::-ms-reveal {
        display: none
    }

    .gform_wrapper.gravity-theme .gform_validation_container,body .gform_wrapper.gravity-theme .gform_body .gform_fields .gfield.gform_validation_container,body .gform_wrapper.gravity-theme .gform_fields .gfield.gform_validation_container,body .gform_wrapper.gravity-theme .gform_validation_container {
        display: none!important;
        left: -9000px;
        position: absolute!important
    }

    .gform_wrapper.gravity-theme .chosen-container {
        display: inline-block;
        font-size: 16px;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .chosen-container * {
        box-sizing: border-box
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-drop {
        background: #fff;
        border: 1px solid #aaa;
        border-top: 0;
        box-shadow: 0 4px 5px rgba(0,0,0,.15);
        display: none;
        position: absolute;
        top: 100%;
        width: 100%;
        z-index: 1010
    }

    .gform_wrapper.gravity-theme .chosen-container.chosen-with-drop .chosen-drop {
        display: block
    }

    .gform_wrapper.gravity-theme .chosen-container a {
        cursor: pointer
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-single .group-name,.gform_wrapper.gravity-theme .chosen-container .search-choice .group-name {
        color: #999;
        font-weight: 400;
        margin-right: 4px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-single .group-name:after,.gform_wrapper.gravity-theme .chosen-container .search-choice .group-name:after {
        content: ":";
        padding-left: 2px;
        vertical-align: top
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single {
        background: linear-gradient(#fff 20%,#f6f6f6 50%,#eee 52%,#f4f4f4);
        background-clip: padding-box;
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 5px;
        box-shadow: inset 0 0 3px #fff,0 1px 1px rgba(0,0,0,.1);
        color: #444;
        display: block;
        height: 40px;
        line-height: 24px;
        overflow: hidden;
        padding: 0 0 0 8px;
        position: relative;
        text-decoration: none;
        white-space: nowrap
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single input[type=text] {
        cursor: pointer;
        opacity: 0;
        position: absolute;
        width: 0
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-default {
        color: #999
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single span {
        display: block;
        line-height: 38.4px;
        margin-right: 24px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single-with-deselect span {
        margin-right: 36px
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single abbr {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite.png) -42px 1px no-repeat;
        display: block;
        font-size: 1px;
        height: 12px;
        position: absolute;
        right: 26px;
        top: 6px;
        width: 12px
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single abbr:hover,.gform_wrapper.gravity-theme .chosen-container-single.chosen-disabled .chosen-single abbr:hover {
        background-position: -42px -10px
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single div {
        display: block;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 18px
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-single div b {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite.png) no-repeat 0 10px;
        display: block;
        height: 100%;
        width: 100%
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-search {
        margin: 0;
        padding: 3px 4px;
        position: relative;
        white-space: nowrap;
        z-index: 1010
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-search input[type=text] {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite.png) no-repeat 100% -20px;
        border: 1px solid #aaa;
        border-radius: 0;
        font-family: sans-serif;
        font-size: 1em;
        height: auto;
        line-height: normal;
        margin: 1px 0;
        outline: 0;
        padding: 4px 20px 4px 5px;
        width: 100%
    }

    .gform_wrapper.gravity-theme .chosen-container-single .chosen-drop {
        background-clip: padding-box;
        border-radius: 0 0 4px 4px;
        margin-top: -1px
    }

    .gform_wrapper.gravity-theme .chosen-container-single.chosen-container-single-nosearch .chosen-search {
        opacity: 0;
        pointer-events: none;
        position: absolute
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results {
        -webkit-overflow-scrolling: touch;
        color: #444;
        margin: 0 4px 4px 0;
        max-height: 240px;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 0 0 0 4px;
        position: relative
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li {
        -webkit-touch-callout: none;
        word-wrap: break-word;
        display: none;
        line-height: 15px;
        list-style: none;
        margin: 0;
        padding: 5px 6px
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.active-result {
        cursor: pointer;
        display: list-item
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.disabled-result {
        color: #ccc;
        cursor: default;
        display: list-item
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.highlighted {
        background-color: #3875d7;
        background-image: linear-gradient(#3875d7 20%,#2a62bc 90%);
        color: #fff
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.no-results {
        background: #f4f4f4;
        color: #777;
        display: list-item
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.group-result {
        cursor: default;
        display: list-item;
        font-weight: 700
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li.group-option {
        padding-left: 15px
    }

    .gform_wrapper.gravity-theme .chosen-container .chosen-results li em {
        font-style: normal;
        text-decoration: underline
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices {
        background-color: #fff;
        border: 1px solid #aaa;
        cursor: text;
        height: auto;
        margin: 0;
        overflow: hidden;
        padding: 8px;
        position: relative;
        width: 100%
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li {
        float: left;
        list-style: none
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-field {
        margin: 0;
        padding: 0;
        white-space: nowrap
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-field input[type=text] {
        background: 0 0!important;
        border: 0!important;
        border-radius: 0;
        box-shadow: none;
        color: #999;
        font-family: sans-serif;
        font-size: 100%;
        height: 25px;
        line-height: normal;
        margin: 1px 0;
        outline: 0;
        padding: 0;
        width: 25px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice {
        background-clip: padding-box;
        background-color: #eee;
        background-image: linear-gradient(#f4f4f4 20%,#f0f0f0 50%,#e8e8e8 52%,#eee);
        background-repeat: repeat-x;
        background-size: 100% 19px;
        border: 1px solid #aaa;
        border-radius: 3px;
        box-shadow: inset 0 0 2px #fff,0 1px 0 rgba(0,0,0,.05);
        color: #333;
        cursor: default;
        line-height: 13px;
        margin: 3px 5px 3px 0;
        max-width: 100%;
        padding: 3px 20px 3px 5px;
        position: relative
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice span {
        word-wrap: break-word
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite.png) -42px 1px no-repeat;
        display: block;
        font-size: 1px;
        height: 12px;
        position: absolute;
        right: 3px;
        top: 4px;
        width: 12px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
        background-position: -42px -10px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice-disabled {
        background-color: #e4e4e4;
        background-image: linear-gradient(#f4f4f4 20%,#f0f0f0 50%,#e8e8e8 52%,#eee);
        border: 1px solid #ccc;
        color: #666;
        padding-right: 5px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice-focus {
        background: #d4d4d4
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close {
        background-position: -42px -10px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-results {
        margin: 0;
        padding: 0
    }

    .gform_wrapper.gravity-theme .chosen-container-multi .chosen-drop .result-selected {
        color: #ccc;
        cursor: default;
        display: list-item
    }

    .gform_wrapper.gravity-theme .chosen-container-active .chosen-single {
        border: 1px solid #5897fb;
        box-shadow: 0 0 5px rgba(0,0,0,.3)
    }

    .gform_wrapper.gravity-theme .chosen-container-active.chosen-with-drop .chosen-single {
        background-image: linear-gradient(#eee 20%,#fff 80%);
        border: 1px solid #aaa;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: inset 0 1px 0 #fff
    }

    .gform_wrapper.gravity-theme .chosen-container-active.chosen-with-drop .chosen-single div {
        background: 0 0;
        border-left: none
    }

    .gform_wrapper.gravity-theme .chosen-container-active.chosen-with-drop .chosen-single div b {
        background-position: -18px 10px
    }

    .gform_wrapper.gravity-theme .chosen-container-active .chosen-choices {
        border: 1px solid #5897fb;
        box-shadow: 0 0 5px rgba(0,0,0,.3)
    }

    .gform_wrapper.gravity-theme .chosen-container-active .chosen-choices li.search-field input[type=text] {
        color: #222!important
    }

    .gform_wrapper.gravity-theme .chosen-disabled {
        cursor: default;
        opacity: .5!important
    }

    .gform_wrapper.gravity-theme .chosen-disabled .chosen-choices .search-choice .search-choice-close,.gform_wrapper.gravity-theme .chosen-disabled .chosen-single {
        cursor: default
    }

    .gform_wrapper.gravity-theme .chosen-rtl {
        text-align: right
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-single {
        overflow: visible;
        padding: 0 8px 0 0
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-single span {
        direction: rtl;
        margin-left: 26px;
        margin-right: 0
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-single-with-deselect span {
        margin-left: 38px
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-single div {
        left: 3px;
        right: auto
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-single abbr {
        left: 26px;
        right: auto
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-choices li {
        float: right
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-choices li.search-field input[type=text] {
        direction: rtl
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-choices li.search-choice {
        margin: 3px 5px 3px 0;
        padding: 3px 5px 3px 19px
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-choices li.search-choice .search-choice-close {
        left: 4px;
        right: auto
    }

    .gform_wrapper.gravity-theme .chosen-rtl.chosen-container-single .chosen-results {
        margin: 0 0 4px 4px;
        padding: 0 4px 0 0
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-results li.group-option {
        padding-left: 0;
        padding-right: 15px
    }

    .gform_wrapper.gravity-theme .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
        border-right: none
    }

    .gform_wrapper.gravity-theme .chosen-rtl .chosen-search input[type=text] {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite.png) no-repeat -30px -20px;
        direction: rtl;
        padding: 4px 5px 4px 20px
    }

    .gform_wrapper.gravity-theme .chosen-rtl.chosen-container-single .chosen-single div b {
        background-position: 6px 2px
    }

    .gform_wrapper.gravity-theme .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b {
        background-position: -12px 2px
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 1.5),only screen and (min-resolution:1.5dppx),only screen and (min-resolution:144dpi) {
        .gform_wrapper.gravity-theme .chosen-container .chosen-results-scroll-down span,.gform_wrapper.gravity-theme .chosen-container .chosen-results-scroll-up span,.gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices .search-choice .search-choice-close,.gform_wrapper.gravity-theme .chosen-container-single .chosen-search input[type=text],.gform_wrapper.gravity-theme .chosen-container-single .chosen-single abbr,.gform_wrapper.gravity-theme .chosen-container-single .chosen-single div b,.gform_wrapper.gravity-theme .chosen-rtl .chosen-search input[type=text] {
            background-image:url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../legacy/css/chosen-sprite@2x.png)!important;
            background-repeat: no-repeat!important;
            background-size: 52px 37px!important
        }
    }

    body .gform_wrapper.gravity-theme .chosen-container a.chosen-single {
        border-radius: inherit
    }

    body .gform_wrapper.gravity-theme ul.chosen-results li {
        line-height: inherit
    }

    @media only screen and (max-width: 641px) {
        .gform_wrapper.gravity-theme input:not([type=radio]):not([type=checkbox]):not([type=image]):not([type=file]) {
            line-height:2;
            min-height: 32px
        }

        .gform_wrapper.gravity-theme textarea {
            line-height: 1.5
        }

        .gform_wrapper.gravity-theme .chosen-container.chosen-container-single[style] {
            width: 100%!important
        }

        .gform_wrapper.gravity-theme .chosen-container-single .chosen-single {
            height: 40px;
            line-height: 2.8
        }

        .gform_wrapper.gravity-theme .chosen-container-single .chosen-single div b {
            position: relative;
            top: 10px
        }

        .gform_wrapper.gravity-theme div.chosen-container.chosen-container-multi[style] {
            width: 100%!important
        }

        .gform_wrapper.gravity-theme .chosen-container.chosen-container-multi ul.chosen-choices li.search-choice,.gform_wrapper.gravity-theme .chosen-container.chosen-container-multi ul.chosen-choices li.search-field {
            float: none;
            line-height: inherit;
            width: 100%
        }

        .gform_wrapper.gravity-theme .chosen-container.chosen-container-multi ul.chosen-choices li.search-choice span {
            margin-bottom: 0
        }

        .gform_wrapper.gravity-theme .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            top: calc(50% - 6px)
        }

        .gform_wrapper.gravity-theme .chosen-container span:not(.ginput_price) {
            display: block;
            margin-bottom: 8px
        }

        .gform_wrapper.gravity-theme li.field_sublabel_below .ginput_complex {
            margin-top: 12px!important
        }

        .gform_wrapper.gravity-theme ul.gfield_checkbox li label,.gform_wrapper.gravity-theme ul.gfield_radio li label {
            cursor: pointer;
            width: 85%
        }
    }

    @media only screen and (min-width: 641px) {
        body .gform_wrapper.gravity-theme select.medium.gfield_select+div.chosen-container-multi[style],body .gform_wrapper.gravity-theme select.medium.gfield_select+div.chosen-container-single[style] {
            width:calc(50% - 8px)!important
        }

        body .gform_wrapper.gravity-theme select.large.gfield_select+div.chosen-container-multi[style],body .gform_wrapper.gravity-theme select.large.gfield_select+div.chosen-container-single[style] {
            width: 100%!important
        }

        body .gform_wrapper.gravity-theme select.small.gfield_select+div.chosen-container-multi[style],body .gform_wrapper.gravity-theme select.small.gfield_select+div.chosen-container-single[style] {
            width: 25%!important
        }
    }

    .gform_wrapper.gravity-theme .gf_invisible,.gform_wrapper.gravity-theme .gfield_visibility_hidden {
        left: -9999px;
        position: absolute;
        visibility: hidden
    }

    .gform_wrapper.gravity-theme .gf_hide_charleft div.charleft {
        display: none!important
    }

    .gform_wrapper.gravity-theme .gf_hidden,.gform_wrapper.gravity-theme .gform_hidden {
        display: none
    }

    .gform_wrapper.gravity-theme .hidden_label .gfield_label,.gform_wrapper.gravity-theme .hidden_sub_label,.gform_wrapper.gravity-theme .screen-reader-text {
        clip: rect(1px,1px,1px,1px);
        word-wrap: normal!important;
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .gform_wrapper.gravity-theme button.screen-reader-text:focus {
        clip: auto;
        border: 0;
        -webkit-clip-path: none;
        clip-path: none;
        height: auto;
        margin: 0;
        position: static!important;
        width: auto
    }

    @media only screen and (min-width: 641px) {
        .gform_wrapper.gravity-theme .gfield.gf_list_2col .gfield_checkbox,.gform_wrapper.gravity-theme .gfield.gf_list_2col .gfield_radio {
            grid-column-gap:2rem;
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_3col .gfield_checkbox,.gform_wrapper.gravity-theme .gfield.gf_list_3col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_4col .gfield_checkbox,.gform_wrapper.gravity-theme .gfield.gf_list_4col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_5col .gfield_checkbox,.gform_wrapper.gravity-theme .gfield.gf_list_5col .gfield_radio {
            grid-column-gap: 2rem;
            display: grid;
            grid-template-columns: repeat(5,1fr);
            grid-template-rows: repeat(auto-fill,auto)
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_checkbox,.gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_radio {
            display: block
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_radio .gchoice {
            display: inline-block;
            padding-right: 16px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_checkbox .gchoice label,.gform_wrapper.gravity-theme .gfield.gf_list_inline .gfield_radio .gchoice label {
            max-width: none
        }

        .gform_wrapper.gravity-theme .gf_list_2col_vertical .gfield_checkbox,.gform_wrapper.gravity-theme .gf_list_2col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 2;
            column-count: 2;
            display: block
        }

        .gform_wrapper.gravity-theme .gf_list_3col_vertical .gfield_checkbox,.gform_wrapper.gravity-theme .gf_list_3col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 3;
            column-count: 3;
            display: block
        }

        .gform_wrapper.gravity-theme .gf_list_4col_vertical .gfield_checkbox,.gform_wrapper.gravity-theme .gf_list_4col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 4;
            column-count: 4;
            display: block
        }

        .gform_wrapper.gravity-theme .gf_list_5col_vertical .gfield_checkbox,.gform_wrapper.gravity-theme .gf_list_5col_vertical .gfield_radio {
            grid-column-gap: 2rem;
            -moz-column-count: 5;
            column-count: 5;
            display: block
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_25 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_25 .gfield_radio .gchoice {
            height: 25px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_50 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_50 .gfield_radio .gchoice {
            height: 50px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_75 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_75 .gfield_radio .gchoice {
            height: 75px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_100 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_100 .gfield_radio .gchoice {
            height: 100px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_125 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_125 .gfield_radio .gchoice {
            height: 125px
        }

        .gform_wrapper.gravity-theme .gfield.gf_list_height_150 .gfield_checkbox .gchoice,.gform_wrapper.gravity-theme .gfield.gf_list_height_150 .gfield_radio .gchoice {
            height: 150px
        }
    }

    .gform_wrapper.gravity-theme .gf_hide_ampm .gfield_time_ampm {
        display: none!important
    }

    .gform_wrapper.gravity-theme .gsection.gf_scroll_text {
        background-color: #fff;
        border: 1px solid #ccc;
        height: 240px;
        overflow-x: hidden;
        overflow-y: scroll;
        padding: 32px
    }

    .gform_wrapper.gravity-theme .gsection.gf_scroll_text .gsection_title {
        margin-top: 0
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_blue,.gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_gray,.gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_green,.gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_red,.gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_yellow {
        border-radius: 3px;
        margin: 20px 0!important;
        padding: 20px!important
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_green {
        background-color: #cbeca0;
        border: 1px solid #97b48a;
        color: #030;
        text-shadow: #dfb 1px 1px
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_red {
        background-color: #faf2f5;
        border: 1px solid #cfadb3;
        color: #832525;
        text-shadow: #fff 1px 1px
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_yellow {
        background-color: #fffbcc;
        border: 1px solid #e6db55;
        color: #222;
        text-shadow: #fcfaea 1px 1px
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_gray {
        background-color: #eee;
        border: 1px solid #ccc;
        color: #424242;
        text-shadow: #fff 1px 1px
    }

    .gform_wrapper.gravity-theme .gfield.gfield_html.gf_alert_blue {
        background-color: #d1e4f3;
        border: 1px solid #a7c2e7;
        color: #314475;
        text-shadow: #e0f1ff 1px 1px
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal {
        margin: 0 auto;
        width: calc(100% - 16px)
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body,.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_footer.top_label {
        display: table-cell;
        margin: 0;
        padding: 0;
        position: relative;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body {
        max-width: 75%;
        width: auto
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label {
        display: table;
        width: 100%
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield {
        display: table-cell;
        height: auto;
        padding-right: 1em
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield .large,.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield .medium,.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield .small {
        width: 100%
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield .ginput_container_checkbox .gchoice,.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label .gfield .ginput_container_radio .gchoice {
        display: inline-block;
        margin-right: .5em
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label.form_sublabel_above .gfield,.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_body .top_label.form_sublabel_below .gfield {
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gfield,.gform_wrapper.gravity-theme .gf_simple_horizontal .ginput_container {
        margin-top: 0!important
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_footer.top_label {
        margin: 0;
        max-width: 25%;
        padding: 0;
        text-align: left;
        width: auto
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gform_footer.top_label input[type=button],.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_footer.top_label input[type=image],.gform_wrapper.gravity-theme .gf_simple_horizontal .gform_footer.top_label input[type=submit] {
        height: auto
    }

    .gform_wrapper.gravity-theme .gf_simple_horizontal .gfield_description:not(.validation_message),.gform_wrapper.gravity-theme .gf_simple_horizontal .gfield_label,.gform_wrapper.gravity-theme .gf_simple_horizontal .ginput_complex label {
        display: block;
        height: 1px;
        left: -9000px;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 1px
    }

    .gform_wrapper.gravity-theme body:not(.rtl) .gform_wrapper form.gf_simple_horizontal div.gform_footer.top_label {
        text-align: left
    }

    .gform_confirmation_wrapper.gf_confirmation_simple_yellow {
        background-color: #fffbcc;
        border-bottom: 1px solid #e6db55;
        border-top: 1px solid #e6db55;
        color: #424242;
        font-size: 25px;
        margin: 30px 0;
        max-width: 99%;
        padding: 32px
    }

    .gform_confirmation_wrapper.gf_confirmation_simple_gray {
        background-color: #eaeaea;
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #ccc;
        color: #424242;
        font-size: 25px;
        margin: 30px 0;
        max-width: 99%;
        padding: 32px
    }

    .gform_confirmation_wrapper.gf_confirmation_yellow_gradient {
        background-color: #fffbd2;
        border: 1px solid #e6db55;
        box-shadow: 0 0 5px hsla(56,57%,69%,.75);
        margin: 30px 0;
        position: relative
    }

    .gform_confirmation_wrapper.gf_confirmation_yellow_gradient .gform_confirmation_message {
        background: #fffce5;
        background: linear-gradient(180deg,#fffce5 0,#fff9bf);
        background-color: #fffbcc;
        border-bottom: 1px solid #e6db55;
        border-top: 2px solid #fff;
        color: #424242;
        font-size: 28px;
        margin: 0;
        max-width: 99%;
        padding: 40px
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient {
        background-color: #f1fcdf;
        border: 1px solid #a7c37c;
        box-shadow: 0 0 5px rgba(86,122,86,.4);
        margin: 30px 0;
        position: relative
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient .gform_confirmation_message {
        background: #dbf2b7;
        background: linear-gradient(180deg,#dbf2b7 0,#b4d088);
        background-color: #fffbcc;
        border-bottom: 1px solid #a7c37c;
        border-top: 2px solid #effade;
        color: #030;
        font-size: 28px;
        margin: 0;
        max-width: 99%;
        padding: 40px;
        text-shadow: #dfb 1px 1px
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient:after,.gform_confirmation_wrapper.gf_confirmation_green_gradient:before,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:after,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:before {
        background: rgba(0,0,0,.2);
        bottom: 15px;
        box-shadow: 0 15px 10px rgba(0,0,0,.2);
        content: "";
        left: 10px;
        max-width: 40%;
        position: absolute;
        top: 80%;
        transform: rotate(-3deg);
        width: 50%;
        z-index: -1
    }

    .gform_confirmation_wrapper.gf_confirmation_green_gradient:after,.gform_confirmation_wrapper.gf_confirmation_yellow_gradient:after {
        left: auto;
        right: 10px;
        transform: rotate(3deg)
    }

    .gform_wrapper.gravity-theme .gfield textarea {
        width: 100%
    }

    .gform_wrapper.gravity-theme .gfield textarea.small {
        height: 96px
    }

    .gform_wrapper.gravity-theme .gfield textarea.medium {
        height: 192px
    }

    .gform_wrapper.gravity-theme .gfield textarea.large {
        height: 288px
    }

    .gform_wrapper.gravity-theme .gfield input,.gform_wrapper.gravity-theme .gfield select {
        max-width: 100%
    }

    .gform_wrapper.gravity-theme .gfield input.small,.gform_wrapper.gravity-theme .gfield select.small {
        width: calc(25% - 12px)
    }

    .gform_wrapper.gravity-theme .gfield input.medium,.gform_wrapper.gravity-theme .gfield select.medium {
        width: calc(50% - 8px)
    }

    .gform_wrapper.gravity-theme .gfield input.large,.gform_wrapper.gravity-theme .gfield select.large {
        width: 100%
    }

    .gform_wrapper.gravity-theme * {
        box-sizing: border-box
    }

    .gform_wrapper.gravity-theme .gform_fields {
        grid-column-gap: 2%;
        -ms-grid-columns: (1fr 2%) [12];
        grid-row-gap: 16px;
        display: grid;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows: repeat(auto-fill,auto);
        width: 100%
    }

    .gform_wrapper.gravity-theme .gfield {
        grid-column: 1/-1;
        min-width: 0
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-full {
        -ms-grid-column-span: 12;
        grid-column: span 12
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-eleven-twelfths {
        -ms-grid-column-span: 11;
        grid-column: span 11
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-five-sixths {
        -ms-grid-column-span: 10;
        grid-column: span 10
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-three-quarter {
        -ms-grid-column-span: 9;
        grid-column: span 9
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-two-thirds {
        -ms-grid-column-span: 8;
        grid-column: span 8
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-seven-twelfths {
        -ms-grid-column-span: 7;
        grid-column: span 7
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-half {
        -ms-grid-column-span: 6;
        grid-column: span 6
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-five-twelfths {
        -ms-grid-column-span: 5;
        grid-column: span 5
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-third {
        -ms-grid-column-span: 4;
        grid-column: span 4
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-quarter {
        -ms-grid-column-span: 3;
        grid-column: span 3
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-one-sixth {
        -ms-grid-column-span: 2;
        grid-column: span 2
    }

    .gform_wrapper.gravity-theme .gfield.gfield--width-one-twelfth {
        -ms-grid-column-span: 1;
        grid-column: span 1
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .gform_fields {
            grid-column-gap:0
        }

        .gform_wrapper.gravity-theme .gfield:not(.gfield--width-full) {
            grid-column: 1/-1
        }
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-full {
        width: 100%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-eleven-twelfths {
        width: 91.6666%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-five-sixths {
        width: 83.3333%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-three-quarter {
        width: 75%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-two-thirds {
        width: 66.6666%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-seven-twelfths {
        width: 58.3333%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-half {
        width: 50%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-five-twelfths {
        width: 41.6666%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-third {
        width: 33.3333%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-quarter {
        width: 25%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-one-sixth {
        width: 16.6666%
    }

    .gform_wrapper.gravity-theme .gform_footer .gform-button--width-full.gfield--width-one-twelfth {
        width: 8.3333%
    }

    .gform_wrapper.gravity-theme .left_label .gfield:not(.gsection):not(.gfield_html):not(fieldset),.gform_wrapper.gravity-theme .right_label .gfield:not(.gsection):not(.gfield_html):not(fieldset) {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        width: 100%
    }

    .gform_wrapper.gravity-theme .left_label .gfield_label,.gform_wrapper.gravity-theme .right_label .gfield_label {
        margin: 0;
        padding: 0;
        width: 30%
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .left_label .gfield_label,.gform_wrapper.gravity-theme .right_label .gfield_label {
            width:100%
        }
    }

    .gform_wrapper.gravity-theme .gform_fields.left_label fieldset,.gform_wrapper.gravity-theme .gform_fields.right_label fieldset {
        clear: both
    }

    .gform_wrapper.gravity-theme .gform_fields.left_label fieldset .ginput_container,.gform_wrapper.gravity-theme .gform_fields.right_label fieldset .ginput_container {
        float: left;
        width: 70%
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .gform_fields.left_label fieldset .ginput_container,.gform_wrapper.gravity-theme .gform_fields.left_label fieldset>.ginput_complex,.gform_wrapper.gravity-theme .gform_fields.right_label fieldset .ginput_container,.gform_wrapper.gravity-theme .gform_fields.right_label fieldset>.ginput_complex {
            width:100%
        }
    }

    .gform_wrapper.gravity-theme .gform_fields.left_label legend.gfield_label,.gform_wrapper.gravity-theme .gform_fields.right_label legend.gfield_label {
        display: block;
        float: left;
        padding-right: 1em;
        width: 30%
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .gform_fields.left_label legend.gfield_label,.gform_wrapper.gravity-theme .gform_fields.right_label legend.gfield_label {
            width:100%
        }
    }

    .gform_wrapper.gravity-theme .left_label .ginput_complex .ginput_container,.gform_wrapper.gravity-theme .right_label .ginput_complex .ginput_container {
        width: auto
    }

    .gform_wrapper.gravity-theme .left_label div.gfield>div:not(.ui-resizable-handle):not(.gfield-admin-icons),.gform_wrapper.gravity-theme .right_label div.gfield>div:not(.ui-resizable-handle):not(.gfield-admin-icons) {
        width: 70%
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .left_label div.gfield>div:not(.ui-resizable-handle):not(.gfield-admin-icons),.gform_wrapper.gravity-theme .right_label div.gfield>div:not(.ui-resizable-handle):not(.gfield-admin-icons) {
            width:100%
        }
    }

    .gform_wrapper.gravity-theme .right_label .gfield_label {
        padding-right: 1em;
        text-align: right
    }

    .gform_wrapper.gravity-theme .left_label.gform_fields,.gform_wrapper.gravity-theme .right_label.gform_fields {
        position: relative
    }

    .gform_wrapper.gravity-theme .left_label .gfield_html_formatted,.gform_wrapper.gravity-theme .right_label .gfield_html_formatted {
        margin-left: 30%
    }

    .gform_wrapper.gravity-theme .left_label #field_submit,.gform_wrapper.gravity-theme .right_label #field_submit {
        justify-content: flex-start
    }

    .gform_wrapper.gravity-theme .left_label #field_submit input,.gform_wrapper.gravity-theme .right_label #field_submit input {
        margin-left: 30%
    }

    .gform_wrapper.gravity-theme .field_sublabel_below .ginput_complex {
        align-items: flex-start
    }

    .gform_wrapper.gravity-theme .field_sublabel_above .ginput_complex {
        align-items: flex-end
    }

    .rtl .gform_wrapper.gravity-theme .left_label legend.gfield_label,.rtl .gform_wrapper.gravity-theme .right_label legend.gfield_label {
        margin-left: 1em;
        position: absolute;
        right: 0;
        text-align: left;
        width: 30%
    }

    .rtl .gform_wrapper.gravity-theme .left_label legend.gfield_label {
        width: 30%
    }

    .rtl .gform_wrapper.gravity-theme .left_label .gfield_label {
        padding-left: 1em;
        text-align: left!important
    }

    .rtl .gform_wrapper.gravity-theme .left_label fieldset.gfield,.rtl .gform_wrapper.gravity-theme .right_label fieldset.gfield {
        margin-left: 0;
        padding-right: 30%
    }

    .rtl .gform_wrapper.gravity-theme .right_label .gfield_label,.rtl .gform_wrapper.gravity-theme .right_label legend.gfield_label {
        padding: 0;
        text-align: right
    }

    .rtl .gform_wrapper.gravity-theme .right_label label.gfield_label {
        padding-right: 0
    }

    .rtl .gform_wrapper.gravity-theme .left_label .gfield_html_formatted,.rtl .gform_wrapper.gravity-theme .right_label .gfield_html_formatted {
        margin-left: 0;
        margin-right: 30%
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_label,html[dir=rtl] .gform_wrapper.gravity-theme code,html[dir=rtl] .gform_wrapper.gravity-theme input[type=email],html[dir=rtl] .gform_wrapper.gravity-theme input[type=tel],html[dir=rtl] .gform_wrapper.gravity-theme input[type=url] {
        direction: rtl
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_required {
        margin-left: 0;
        margin-right: 4px
    }

    html[dir=rtl] .gform_wrapper.gravity-theme ::-webkit-input-placeholder {
        text-align: right
    }

    html[dir=rtl] .gform_wrapper.gravity-theme ::-moz-placeholder {
        text-align: right
    }

    html[dir=rtl] .gform_wrapper.gravity-theme :-ms-input-placeholder {
        text-align: right
    }

    html[dir=rtl] .gform_wrapper.gravity-theme :-moz-placeholder {
        text-align: right
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gform_wrapper.gravity-theme fieldset {
        display: block
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_header_item+.gfield_header_item:not(:last-child),html[dir=rtl] .gform_wrapper.gravity-theme .gfield_list_group_item+.gfield_list_group_item {
        margin-left: 0;
        margin-right: 16px
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full) {
        padding-left: 0;
        padding-right: 16px
    }

    @media(min-width: 641px) {
        html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full) {
            padding-left:0;
            padding-right: 16px
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_address.has_street.has_street2 span:not(.ginput_full):nth-of-type(odd),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_address.has_street2:not(.has_street) span:not(.ginput_full):nth-of-type(2n),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_address.has_street:not(.has_street2) span:not(.ginput_full):nth-of-type(2n),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_address:not(.has_street):not(.has_street2) span:not(.ginput_full):nth-of-type(odd) {
            padding-left: 16px;
            padding-right: 0
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .gform_show_password {
            left: 8px;
            right: unset
        }
    }

    @media(max-width: 640px) {
        html[dir=rtl] .gform_wrapper.gravity-theme .left_label fieldset.gfield,html[dir=rtl] .gform_wrapper.gravity-theme .right_label fieldset.gfield {
            padding-right:0
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .left_label legend.gfield_label,html[dir=rtl] .gform_wrapper.gravity-theme .right_label legend.gfield_label {
            margin: 0;
            padding: 0;
            position: relative;
            width: 100%
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .left_label .gfield_label {
            text-align: right!important
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full) {
            padding-right: 0
        }
    }

    .gform_wrapper.gravity-theme .ginput_counter {
        color: #767676;
        font-size: .8em
    }

    .gform_wrapper.gravity-theme .ginput_counter_tinymce {
        border-top: 1px solid #eee;
        font-size: 12px;
        padding: 2px 10px
    }

    .gform_wrapper.gravity-theme .validation_message--hidden-on-empty:empty {
        display: none
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container {
        display: flex;
        height: 32px;
        margin: 8px 0 6.4px
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon {
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards.svg);
        background-repeat: no-repeat;
        height: 32px;
        margin-right: 4.8px;
        text-indent: -9000px;
        width: 40px
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_amex {
        background-position: -167px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_discover {
        background-position: -221px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_mastercard {
        background-position: -275px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_visa {
        background-position: -59px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_jcb {
        background-position: -329px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_maestro {
        background-position: -5px 0
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_selected {
        position: relative
    }

    .gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_selected:after {
        background: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards-check.svg) 50% no-repeat;
        bottom: 4px;
        content: "";
        display: block;
        height: 10px;
        position: absolute;
        right: 0;
        width: 13px
    }

    .gform_wrapper.gravity-theme .ginput_container_creditcard .ginput_cardinfo_right {
        align-items: center;
        display: inline-flex;
        flex-flow: row wrap;
        justify-content: flex-start
    }

    .gform_wrapper.gravity-theme .ginput_container_creditcard .ginput_cardinfo_right label {
        width: 100%
    }

    .gform_wrapper.gravity-theme .ginput_container_creditcard .ginput_card_security_code_icon {
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/gf-creditcards.svg);
        background-position: -382px;
        background-repeat: no-repeat;
        display: block;
        flex: none;
        height: 32px;
        margin-left: .3em;
        width: 40px
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_creditcard .ginput_card_security_code_icon {
        margin-left: 0;
        margin-right: .3em
    }

    .gform_wrapper.gravity-theme .gfield_list_group,.gform_wrapper.gravity-theme .gfield_list_header {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        margin-bottom: 8px
    }

    .gform_wrapper.gravity-theme .gfield_list_group:last-child {
        margin-bottom: 0
    }

    .gform_wrapper.gravity-theme .gfield_header_item {
        word-break: break-word
    }

    .gform_wrapper.gravity-theme .gfield_header_item,.gform_wrapper.gravity-theme .gfield_list_group_item {
        flex-grow: 1;
        width: 0
    }

    .gform_wrapper.gravity-theme .gfield_header_item+.gfield_header_item:not(.gfield_header_item--icons),.gform_wrapper.gravity-theme .gfield_list_group_item+.gfield_list_group_item {
        margin-left: 2%
    }

    .gform_wrapper.gravity-theme .gfield_list_group_item input,.gform_wrapper.gravity-theme .gfield_list_group_item select {
        width: 100%
    }

    .gform_wrapper.gravity-theme .gfield_header_item--icons,.gform_wrapper.gravity-theme .gfield_list_icons {
        align-items: center;
        display: flex;
        flex: none;
        justify-content: center;
        width: 48px
    }

    .gform_wrapper.gravity-theme .gfield_list_icons button {
        background: transparent url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/list-add.svg);
        border: none;
        font-size: 0;
        height: 16px;
        opacity: .5;
        padding: 0;
        transition: opacity .5s ease-out;
        width: 16px
    }

    .gform_wrapper.gravity-theme .gfield_list_icons button:focus,.gform_wrapper.gravity-theme .gfield_list_icons button:hover {
        opacity: 1;
        outline: none
    }

    .gform_wrapper.gravity-theme .gfield_list_icons button.delete_list_item {
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/list-remove.svg);
        margin-left: 5px
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .gfield_list_header {
            display:none
        }

        .gform_wrapper.gravity-theme .gfield_list_group {
            border: 1px solid rgba(0,0,0,.2);
            display: block;
            margin-bottom: 16px;
            padding: 16px
        }

        .gform_wrapper.gravity-theme .gfield_header_item,.gform_wrapper.gravity-theme .gfield_list_group_item {
            width: auto
        }

        .gform_wrapper.gravity-theme .gfield_list_group:last-child {
            margin-bottom: 0
        }

        .gform_wrapper.gravity-theme .gfield_list_group_item:not(:last-child) {
            margin-bottom: 8px
        }

        .gform_wrapper.gravity-theme .gfield_list_group_item:before {
            content: attr(data-label);
            font-size: 14.992px
        }

        .gform_wrapper.gravity-theme .gfield_list_icons {
            background-color: rgba(0,0,0,.1);
            line-height: 0;
            margin: 16px -16px -16px;
            padding: 12px 16px;
            text-align: left;
            width: auto
        }

        .gform_wrapper.gravity-theme .gfield_header_item+.gfield_header_item:not(.gfield_header_item--icons),.gform_wrapper.gravity-theme .gfield_list_group_item+.gfield_list_group_item {
            margin-left: 0
        }
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_header_item+.gfield_header_item:not(.gfield_header_item--icons),html[dir=rtl] .gform_wrapper.gravity-theme .gfield_list_group_item+.gfield_list_group_item {
        margin-left: 0;
        margin-right: 16px
    }

    @media(max-width: 640px) {
        html[dir=rtl] .gform_wrapper.gravity-theme .gfield_header_item+.gfield_header_item:not(.gfield_header_item--icons),html[dir=rtl] .gform_wrapper.gravity-theme .gfield_list_group_item+.gfield_list_group_item {
            margin-right:0
        }
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_list_icons button.delete_list_item {
        margin-left: 0;
        margin-right: 5px
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container {
        width: 100%
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container thead tr {
        display: flex;
        flex-wrap: nowrap
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container thead tr td,.gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container thead tr th {
        flex-grow: 1;
        white-space: normal;
        width: 0;
        word-break: break-word
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container thead tr td:last-child {
        flex-grow: unset;
        width: 48px
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody td,.gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody th {
        flex-grow: 1;
        white-space: normal;
        width: 0;
        word-break: break-word
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody td.gfield_list_icons {
        flex-grow: unset;
        width: 48px
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr .gfield_list_cell {
        flex-grow: 1
    }

    .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr .gfield_list_cell input {
        width: 95%
    }

    @media screen and (max-width: 640px) {
        .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container th {
            display:none
        }

        .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr {
            flex-flow: column
        }

        .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr td:before {
            content: attr(data-label);
            font-size: 14.992px
        }

        .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr td {
            flex-grow: unset;
            width: auto
        }

        .gform_wrapper.gform_legacy_markup table.gfield_list.gfield_list_container tbody tr .gfield_list_icons {
            height: 35px;
            width: auto
        }
    }
}

@media all {
}

@media all {
    .gf_browser_ie.gform_wrapper.gravity-theme form {
        overflow: hidden;
        padding: 1px 1px 8px
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform-body {
        margin: 0 -32px -32px 0
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields {
        display: flex;
        flex-wrap: wrap;
        overflow: hidden
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield {
        background-clip: padding-box;
        border: 0 solid transparent;
        border-width: 0 32px 32px 0;
        width: 100%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-full {
        width: 100%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-eleven-twelfths {
        width: 91.666%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-five-sixths {
        width: 83.333%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-three-quarter {
        width: 75%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield.gfield--width-two-thirds {
        width: 66.666%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-seven-twelfths {
        width: 58.333%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-half {
        width: 50%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-five-twelfths {
        width: 41.666%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-third {
        width: 33.333%
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield.gfield--width-quarter {
        width: 25%
    }

    @media(max-width: 840px) {
        .gf_browser_ie.gform_wrapper.gravity-theme .gform_fields .gfield {
            width:100%
        }
    }

    .gf_browser_ie.gform_wrapper.gravity-theme .ginput_container_address .ginput_left,.gf_browser_ie.gform_wrapper.gravity-theme .ginput_container_address .ginput_right {
        flex: 0 50%;
        flex-basis: auto;
        width: 50%
    }
}

@media all {
    .gform_wrapper.gravity-theme .gfield_label {
        display: inline-block;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        padding: 0
    }

    .gform_wrapper.gravity-theme .gfield_header_item,.gform_wrapper.gravity-theme .gform_fileupload_rules,.gform_wrapper.gravity-theme .ginput_complex label {
        font-size: 15px;
        padding-top: 5px
    }

    .gform_wrapper.gravity-theme.left_label fieldset.gfield,.gform_wrapper.gravity-theme.right_label fieldset.gfield {
        padding: 16px 16px 16px 30%
    }

    .gform_wrapper.gravity-theme.left_label fieldset.gfield .gfield_description,.gform_wrapper.gravity-theme.left_label fieldset.gfield .ginput_container:not(.ginput_container_time),.gform_wrapper.gravity-theme.right_label fieldset.gfield .gfield_description,.gform_wrapper.gravity-theme.right_label fieldset.gfield .ginput_container:not(.ginput_container_time) {
        width: 100%
    }

    .gform_wrapper.gravity-theme.left_label legend.gfield_label,.gform_wrapper.gravity-theme.right_label legend.gfield_label {
        left: 0
    }

    .gform_wrapper.gravity-theme.left_label .gfield:not(.gsection):not(.gfield_html):not(fieldset),.gform_wrapper.gravity-theme.right_label .gfield:not(.gsection):not(.gfield_html):not(fieldset) {
        justify-content: flex-start
    }

    .gform_wrapper.gravity-theme.left_label .gfield_html.gfield_html_formatted,.gform_wrapper.gravity-theme.right_label .gfield_html.gfield_html_formatted {
        display: flex
    }

    .gform_wrapper.gravity-theme.left_label .gfield.gfield_html:not(.gfield_html_formatted) .gf-html-container,.gform_wrapper.gravity-theme.right_label .gfield.gfield_html:not(.gfield_html_formatted) .gf-html-container {
        width: 100%
    }

    .gform_wrapper.gravity-theme.right_label legend.gfield_label {
        text-align: right
    }

    .gform_wrapper.gravity-theme:not(.top_label) .ginput_container.ginput_single_email {
        margin-left: 0
    }

    .gform_wrapper.gravity-theme .gform_validation_errors {
        background: #fff9f9;
        border: 1.5px solid #c02b0a;
        border-radius: 5px;
        box-shadow: 0 1px 4px rgba(0,0,0,.11),0 0 4px rgba(18,25,97,.041);
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 16px 16px 16px 48px;
        position: relative;
        width: 100%
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>h2 {
        color: #c02b0a;
        font-size: 13.2px;
        font-weight: 500;
        line-height: 17.6px;
        margin: 0 0 12px
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>h2:before {
        display: none
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>h2 .gform-icon {
        align-items: center;
        display: flex;
        font-size: 28px;
        height: 100%;
        left: 12px;
        position: absolute;
        top: 0
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>h2.hide_summary {
        margin: 0
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>ol {
        padding-left: 20px
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>ol a {
        color: #c02b0a;
        font-size: 13.2px
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>ol li {
        color: #c02b0a;
        font-size: 13.2px;
        list-style-type: disc!important;
        margin: 0 0 8px
    }

    .gform_wrapper.gravity-theme .gform_validation_errors>ol li:last-of-type {
        margin-bottom: 0
    }

    .gform_wrapper.gravity-theme .gfield_required {
        color: #c02b0a;
        display: inline-block;
        font-size: 13.008px;
        padding-left: .125em
    }

    .gform_wrapper.gravity-theme .gfield_required .gfield_required_custom,.gform_wrapper.gravity-theme .gfield_required .gfield_required_text {
        font-style: italic;
        font-weight: 400
    }

    .gform_wrapper.gravity-theme .gform_required_legend .gfield_required {
        padding-left: 0
    }

    .gform_wrapper.gravity-theme .validation_error {
        border-bottom: 2px solid #c02b0a;
        border-top: 2px solid #c02b0a;
        color: #c02b0a;
        font-size: 1em;
        font-weight: 700;
        margin-bottom: 32px;
        padding: 16px;
        text-align: center
    }

    .gform_wrapper.gravity-theme .gfield_error .gfield_repeater_cell label,.gform_wrapper.gravity-theme .gfield_error label,.gform_wrapper.gravity-theme .gfield_error legend,.gform_wrapper.gravity-theme .gfield_validation_message,.gform_wrapper.gravity-theme .validation_message,.gform_wrapper.gravity-theme [aria-invalid=true]+label,.gform_wrapper.gravity-theme label+[aria-invalid=true] {
        color: #c02b0a
    }

    .gform_wrapper.gravity-theme .gfield_validation_message,.gform_wrapper.gravity-theme .validation_message {
        background: #fff9f9;
        border: 1px solid #c02b0a;
        font-size: 14.992px;
        margin-top: 8px;
        padding: 12.992px 24px
    }

    .gform_wrapper.gravity-theme .gfield_error [aria-invalid=true] {
        border: 1px solid #c02b0a
    }

    .gform_wrapper.gravity-theme .gform_previous_button.button,.gform_wrapper.gravity-theme .gform_save_link.button {
        -webkit-appearance: none!important;
        background-color: #fff;
        color: #6b7280;
        text-decoration: none
    }

    .gform_wrapper.gravity-theme .gform_previous_button.button svg,.gform_wrapper.gravity-theme .gform_save_link.button svg {
        display: inline-block;
        margin-right: 4px
    }

    .gform_wrapper.gravity-theme button.button:disabled {
        opacity: .6
    }

    .gform_wrapper.gravity-theme #field_submit,.gform_wrapper.gravity-theme .gform_footer {
        display: flex
    }

    .gform_wrapper.gravity-theme #field_submit input,.gform_wrapper.gravity-theme .gform_footer input {
        align-self: flex-end
    }

    .gform_wrapper.gravity-theme #field_submit .gform_image_button,.gform_wrapper.gravity-theme .gform_footer .gform_image_button {
        background-color: transparent;
        border: none;
        border-radius: 0;
        height: auto;
        padding: 0;
        width: auto
    }

    .gform_wrapper.gravity-theme #field_submit .gform-button--width-full,.gform_wrapper.gravity-theme .gform_footer .gform-button--width-full {
        text-align: center;
        width: 100%
    }

    .gform_wrapper.gravity-theme .ginput_complex {
        display: flex;
        flex-flow: row wrap
    }

    .gform_wrapper.gravity-theme .ginput_complex fieldset,.gform_wrapper.gravity-theme .ginput_complex span {
        flex: 1
    }

    .gform_wrapper.gravity-theme .ginput_complex .ginput_full {
        flex: 0 0 100%
    }

    .gform_wrapper.gravity-theme .ginput_complex .clear-multi {
        display: flex
    }

    .gform_wrapper.gravity-theme .ginput_complex label,.gform_wrapper.gravity-theme .ginput_complex legend {
        display: block
    }

    .gform_wrapper.gravity-theme .ginput_complex input,.gform_wrapper.gravity-theme .ginput_complex select {
        width: 100%
    }

    .gform_wrapper.gravity-theme .ginput_container_address {
        margin-left: -1%;
        margin-right: -1%
    }

    .gform_wrapper.gravity-theme .ginput_container_address span {
        flex: 0 0 50%;
        padding-left: .9804%;
        padding-right: .9804%
    }

    .gform_wrapper.gravity-theme .gf_browser_ie .ginput_container_address span:not(.ginput_full) {
        flex: 0 0 49.3%
    }

    @media(min-width: 641px) {
        .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full),.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full) {
            padding-right:1%
        }

        .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full) {
            padding-left: 1%;
            padding-right: 0
        }

        .gform_wrapper.gravity-theme .ginput_container_address span:not(.ginput_full):not(:last-of-type):not(:nth-last-of-type(2)),.gform_wrapper.gravity-theme .ginput_full:not(:last-of-type) {
            margin-bottom: 8px
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full) {
            padding-left: 1%;
            padding-right: 0
        }

        html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full) {
            padding-left: 0;
            padding-right: 1%
        }
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .ginput_complex span {
            flex:0 0 100%;
            margin-bottom: 8px;
            padding-left: 0
        }

        .gform_wrapper.gravity-theme .ginput_complex.ginput_container_address span {
            padding-left: .9804%
        }
    }

    .gform_wrapper.gravity-theme .description,.gform_wrapper.gravity-theme .gfield_description,.gform_wrapper.gravity-theme .gsection_description,.gform_wrapper.gravity-theme .instruction {
        clear: both;
        font-family: inherit;
        font-size: 15px;
        letter-spacing: normal;
        line-height: inherit;
        padding-top: 13px;
        width: 100%
    }

    .gform_wrapper.gravity-theme .field_description_above .description,.gform_wrapper.gravity-theme .field_description_above .gfield_description,.gform_wrapper.gravity-theme .field_description_above .gsection_description,.gform_wrapper.gravity-theme .field_description_above .instruction {
        padding-bottom: 16px;
        padding-top: 0
    }

    .gform_wrapper.gravity-theme .field_sublabel_above .description,.gform_wrapper.gravity-theme .field_sublabel_above .gfield_description,.gform_wrapper.gravity-theme .field_sublabel_above .gsection_description {
        margin-top: 9.008px
    }

    .gform_wrapper.gravity-theme .top_label .gsection_description {
        margin-bottom: 9.008px;
        width: 100%
    }

    .gform_wrapper.gravity-theme .field_description_below .gfield_consent_description,.gform_wrapper.gravity-theme .gfield_consent_description {
        border: 1px solid #ddd;
        font-size: 13.008px;
        margin-top: 12.8px;
        max-height: 240px;
        overflow-y: scroll;
        padding: 6.4px 8px;
        width: 100%
    }

    .gform_wrapper.gravity-theme .gfield_creditcard_warning {
        background-color: rgba(255,223,224,.25);
        border-bottom: 4px solid #c02b0a;
        border-top: 2px solid #c02b0a;
        padding: 16px
    }

    .gform_wrapper.gravity-theme .gfield_creditcard_warning .gfield_creditcard_warning_message {
        color: #c02b0a;
        font-family: inherit;
        font-size: 16px;
        font-weight: 700;
        min-height: 32px;
        position: relative
    }

    .gform_wrapper.gravity-theme .gfield_creditcard_warning .gfield_creditcard_warning_message span {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMDY3IDI4NjUgMjQgMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgLTEwNjcgMjg2NSAyNCAzMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBhdGggZD0iTS0xMDUzIDI4NjVjLTUuNSAwLTEwIDQuNS0xMCAxMGg0YzAtMy4zIDIuNy02IDYtNnM2IDIuNyA2IDZ2MmgtMjB2MTRjMCAzLjMgMi43IDYgNiA2aDEyYzMuMyAwIDYtMi43IDYtNnYtMTZjMC01LjUtNC41LTEwLTEwLTEwem00IDI4aC0xMmMtMS4xIDAtMi0uOS0yLTJ2LTEwaDE2djEwYzAgMS4xLS45IDItMiAyem0tNC02YzAgMS4xLS45IDItMiAycy0yLS45LTItMiAuOS0yIDItMiAyIC45IDIgMnoiIHN0eWxlPSJmaWxsOiM3OTAwMDAiLz48L3N2Zz4=);
        background-position: 0 3.2px;
        background-repeat: no-repeat;
        background-size: 24px 16px;
        border-bottom: 1px solid #c02b0a;
        display: block;
        letter-spacing: .1pt;
        margin-bottom: 16px;
        padding: 0 0 16px 24px;
        text-transform: uppercase
    }

    .gform_wrapper.gravity-theme .ginput_cardextras {
        display: flex;
        flex-wrap: wrap
    }

    .gform_wrapper.gravity-theme .ginput_complex .ginput_cardinfo_right input {
        max-width: 112px;
        width: 30%
    }

    .gform_wrapper.gravity-theme .ginput_card_expiration_container {
        display: flex;
        flex-wrap: wrap
    }

    .gform_wrapper.gravity-theme .ginput_card_expiration_month {
        flex: 1;
        margin-right: 16px
    }

    .gform_wrapper.gravity-theme .ginput_card_expiration_year {
        flex: 1
    }

    .gform_wrapper.gravity-theme .ginput_cardinfo_left label,.gform_wrapper.gravity-theme .ginput_cardinfo_left legend,.gform_wrapper.gravity-theme .ginput_cardinfo_right label,.gform_wrapper.gravity-theme .ginput_cardinfo_right legend {
        flex: 1 1 100%
    }

    .gform_wrapper.gravity-theme fieldset.ginput_cardinfo_left {
        display: flex;
        flex-direction: column
    }

    .gform_wrapper.gravity-theme fieldset.ginput_cardinfo_left legend {
        float: left;
        padding-top: 5px
    }

    .gform_wrapper.gravity-theme .field_sublabel_below fieldset.ginput_cardinfo_left {
        flex-direction: column-reverse
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_card_expiration_month {
        margin-left: 16px;
        margin-right: 0
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gform_card_icon {
        float: right
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_creditcard_warning .gfield_creditcard_warning_message span {
        background-position: right 3.2px;
        background-repeat: no-repeat;
        background-size: 24px 16px;
        display: block;
        margin-bottom: 16px;
        padding: 0 24px 16px 0
    }

    html[dir=rtl] .gform_wrapper.gravity-theme fieldset.ginput_cardinfo_left {
        display: flex
    }

    @media(max-width: 640px) {
        .gform_wrapper.gravity-theme .ginput_card_expiration {
            flex:none
        }

        .gform_wrapper.gravity-theme .ginput_card_expiration_month {
            margin-bottom: 8px
        }
    }

    .gform_wrapper.gravity-theme .ginput_container_date+.ginput_container_date {
        margin-left: 2%
    }

    .gform_wrapper.gravity-theme .ginput_container_date[style*="display:none"]+.ginput_container_date {
        margin-left: 0
    }

    .gform_wrapper.gravity-theme .ginput_container_date label {
        display: block
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_date+.ginput_container_date {
        margin-left: 0;
        margin-right: 16px
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_date[style*="display:none"]+.ginput_container_date {
        margin-right: 0
    }

    .gravity-theme.ui-datepicker {
        background: #fff;
        border: 1px solid #d0d1d3;
        border-radius: 3px;
        box-shadow: 0 .0625rem .25rem rgba(0,0,0,.11),0 0 .25rem rgba(18,25,97,.041);
        color: #607382;
        font-size: .8125rem;
        font-weight: var(--gform-theme-font-weight-medium);
        margin-top: 5px;
        padding: 18px 15px;
        width: auto
    }

    .gravity-theme.ui-datepicker table,.gravity-theme.ui-datepicker td,.gravity-theme.ui-datepicker th,.gravity-theme.ui-datepicker thead,.gravity-theme.ui-datepicker tr {
        background: 0 0;
        border: 0;
        margin: 0
    }

    .gravity-theme.ui-datepicker td,.gravity-theme.ui-datepicker th {
        padding: 5px;
        text-shadow: none;
        text-transform: none
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header {
        border: 0;
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin: 0 0 5px;
        padding: 0;
        position: relative;
        width: 100%
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        speak: never;
        align-items: center;
        background: 0 0;
        border: 0;
        color: #607382;
        cursor: pointer;
        display: flex;
        font-family: gform-icons-theme!important;
        font-size: 24px;
        height: 30px;
        justify-content: center;
        line-height: 1;
        position: absolute;
        text-decoration: none;
        top: -2px;
        transition: color .3s ease-in-out,background-color .3s ease-in-out,border-color .3s ease-in-out;
        width: 30px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next:focus,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next:hover,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:focus,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:hover {
        color: #2f4054
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next .ui-icon,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev .ui-icon {
        display: none
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next:before,.gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:before {
        border: 0;
        height: auto;
        position: static;
        transform: none;
        width: auto
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev {
        left: 0
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:before {
        content: "\e910"
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next {
        right: 0
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header .ui-datepicker-next:before {
        content: "\e91b"
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header select {
        -webkit-appearance: none;
        background-color: transparent;
        background-image: url(//cleanzen.com/wp-content/plugins/gravityforms/assets/css/dist/../../../images/theme/down-arrow.svg);
        background-position: 100% 50%;
        background-repeat: no-repeat;
        background-size: 24px 24px;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        color: #585e6a;
        cursor: pointer;
        display: inline-block;
        font-size: .875rem;
        font-weight: var(--gform-theme-font-weight-medium);
        height: auto;
        min-height: 0;
        padding: 0 22px 0 0;
        width: auto
    }

    .gravity-theme.ui-datepicker .ui-datepicker-header select.ui-datepicker-month {
        margin-right: 20px;
        -moz-text-align-last: right;
        text-align-last: right
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar a,.gravity-theme.ui-datepicker .ui-datepicker-calendar span {
        font-weight: var(--gform-theme-font-weight-normal)
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar th span {
        align-items: center;
        color: #2f4054;
        display: flex;
        font-size: .8125rem;
        font-weight: var(--gform-theme-font-weight-medium);
        height: 40px;
        justify-content: center;
        width: 40px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar td {
        font-size: .8125rem;
        height: 50px;
        width: 50px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-default {
        align-items: center;
        background: 0 0;
        border: 1px solid transparent;
        border-radius: 100%;
        box-shadow: none;
        color: #2f4054;
        display: flex;
        height: 40px;
        justify-content: center;
        text-decoration: none;
        transition: color .3s ease-in-out,background-color .3s ease-in-out,border-color .3s ease-in-out;
        width: 40px
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-default:focus,.gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-default:hover {
        background: 0 0;
        border-color: #607382;
        outline: none
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-default:active {
        background: #f2f3f5;
        border-color: #607382
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-datepicker-current-day .ui-state-default {
        background: #607382;
        border-color: #607382;
        box-shadow: 0 .125rem .125rem rgba(58,58,87,.06);
        color: #fff
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-datepicker-current-day .ui-state-default:focus,.gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-datepicker-current-day .ui-state-default:hover {
        border-color: #607382
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-disabled {
        background: 0 0
    }

    .gravity-theme.ui-datepicker .ui-datepicker-calendar .ui-state-disabled .ui-state-default {
        align-items: center;
        background: #f2f3f5;
        border: 1px solid rgba(32,32,46,.079);
        border-radius: 100%;
        box-shadow: 0 .125rem .125rem rgba(58,58,87,.06);
        color: #686e77;
        cursor: text;
        display: flex;
        height: 40px;
        justify-content: center;
        text-decoration: none;
        width: 40px
    }

    html[dir=rtl] #ui-datepicker-div.gform-theme-datepicker[style] {
        right: auto!important
    }

    .gform_wrapper.gravity-theme .gform_footer,.gform_wrapper.gravity-theme .gform_page_footer {
        margin: 6px 0 0;
        padding: 16px 0
    }

    .gform_wrapper.gravity-theme .gform_footer.left_label,.gform_wrapper.gravity-theme .gform_footer.right_label,.gform_wrapper.gravity-theme .gform_page_footer.left_label,.gform_wrapper.gravity-theme .gform_page_footer.right_label {
        padding: 16px 0 10px 30%
    }

    .gform_wrapper.gravity-theme .gform_footer button,.gform_wrapper.gravity-theme .gform_footer input,.gform_wrapper.gravity-theme .gform_page_footer button,.gform_wrapper.gravity-theme .gform_page_footer input {
        margin-bottom: 8px
    }

    .gform_wrapper.gravity-theme .gform_footer button.button:disabled,.gform_wrapper.gravity-theme .gform_footer input.button:disabled,.gform_wrapper.gravity-theme .gform_page_footer button.button:disabled,.gform_wrapper.gravity-theme .gform_page_footer input.button:disabled {
        opacity: .6
    }

    .gform_wrapper.gravity-theme .gform_footer button+input,.gform_wrapper.gravity-theme .gform_footer input+button,.gform_wrapper.gravity-theme .gform_footer input+input,.gform_wrapper.gravity-theme .gform_page_footer button+input,.gform_wrapper.gravity-theme .gform_page_footer input+button,.gform_wrapper.gravity-theme .gform_page_footer input+input {
        margin-left: 8px
    }

    html[dir=rtl] .gform_wrapper.gravity-theme button+input,html[dir=rtl] .gform_wrapper.gravity-theme input+button,html[dir=rtl] .gform_wrapper.gravity-theme input+input {
        margin-right: 8px
    }

    .gform_wrapper.gravity-theme .gfield_checkbox label,.gform_wrapper.gravity-theme .gfield_radio label {
        display: inline-block;
        font-size: 15px
    }

    .gform_wrapper.gravity-theme .gfield_checkbox button,.gform_wrapper.gravity-theme .gfield_checkbox input[type=text],.gform_wrapper.gravity-theme .gfield_radio button,.gform_wrapper.gravity-theme .gfield_radio input[type=text] {
        margin-top: 16px
    }

    .gform_wrapper.gravity-theme .gfield-choice-input {
        display: inline-block;
        margin-top: 0;
        top: 0;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gfield-choice-input+label {
        margin-bottom: 0;
        max-width: calc(100% - 32px);
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gfield-choice-input:disabled+label {
        color: #757575
    }

    .gform_wrapper.gravity-theme input[type=number] {
        display: inline-block
    }

    .gform_wrapper.gravity-theme input[type=color],.gform_wrapper.gravity-theme input[type=date],.gform_wrapper.gravity-theme input[type=datetime-local],.gform_wrapper.gravity-theme input[type=datetime],.gform_wrapper.gravity-theme input[type=email],.gform_wrapper.gravity-theme input[type=month],.gform_wrapper.gravity-theme input[type=number],.gform_wrapper.gravity-theme input[type=password],.gform_wrapper.gravity-theme input[type=search],.gform_wrapper.gravity-theme input[type=tel],.gform_wrapper.gravity-theme input[type=text],.gform_wrapper.gravity-theme input[type=time],.gform_wrapper.gravity-theme input[type=url],.gform_wrapper.gravity-theme input[type=week],.gform_wrapper.gravity-theme select,.gform_wrapper.gravity-theme textarea {
        font-size: 15px;
        margin-bottom: 0;
        margin-top: 0;
        padding: 8px
    }

    .gform_wrapper.gravity-theme .chosen-container-multi,.gform_wrapper.gravity-theme .ginput_product_price,.gform_wrapper.gravity-theme .ginput_product_price_label,.gform_wrapper.gravity-theme .ginput_quantity_label {
        font-size: 15px
    }

    .gform_wrapper.gravity-theme .chosen-choices {
        padding: 8px
    }

    .gform_wrapper.gravity-theme .ginput_container_date {
        align-content: flex-start;
        align-items: center;
        display: flex
    }

    .gform_wrapper.gravity-theme .ginput_container_date input {
        width: auto
    }

    .gform_wrapper.gravity-theme .ginput_container_date .datepicker_with_icon.large {
        width: calc(100% - 48px)
    }

    .gform_wrapper.gravity-theme .ginput_container_date img.ui-datepicker-trigger {
        display: block;
        margin-left: 12.8px;
        max-height: 25.6px;
        max-width: 25.6px
    }

    .gform_wrapper.gravity-theme .ginput_complex .ginput_container_date {
        flex-basis: min-content;
        flex-flow: row wrap;
        max-width: 30%
    }

    .gform_wrapper.gravity-theme .ginput_complex .ginput_container_date input,.gform_wrapper.gravity-theme .ginput_complex .ginput_container_date select {
        min-width: 84px;
        width: 100%
    }

    .gform_wrapper.gravity-theme .gfield_chainedselect.horizontal select {
        min-width: 100px
    }

    .gform_wrapper.gravity-theme .gform_show_password {
        align-items: center;
        background: 0 0;
        color: inherit;
        display: flex;
        height: 100%
    }

    .gform_wrapper.gravity-theme .gform_show_password:focus,.gform_wrapper.gravity-theme .gform_show_password:hover {
        background: 0 0
    }

    .gform_wrapper.gravity-theme .gfield_consent_description {
        border: 1px solid #ddd;
        font-size: .8em;
        margin-top: 8px;
        max-height: 240px;
        overflow-y: scroll;
        padding: 8px
    }

    .gform_wrapper.gravity-theme .gfield .ginput_quantity {
        width: auto
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .ginput_container_date img.ui-datepicker-trigger {
        margin-left: 0;
        margin-right: 12.8px;
        order: 1
    }

    .gform_wrapper.gravity-theme .gsection {
        border-bottom: 1px solid #ccc;
        padding: 0 16px 8px 0
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gsection {
        padding: 0 0 8px 16px
    }

    .gform_wrapper.gravity-theme .gf_progressbar_title {
        color: #767676;
        font-size: 12.992px;
        font-weight: 400;
        margin: 0 0 4.8px
    }

    .gform_wrapper.gravity-theme .gf_progressbar {
        background: #e8e8e8;
        border-radius: 10.5px;
        margin-bottom: 16px;
        position: relative
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage {
        border-radius: 10.5px;
        height: 20.992px;
        text-align: right;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage:not(.percentbar_100) {
        border-radius: 10.5px 0 0 10.5px
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage span {
        display: block;
        float: right;
        font-size: 13px;
        line-height: 21px;
        margin-left: 8px;
        margin-right: 8px;
        min-width: 2em;
        width: auto
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_0 span {
        color: #959595;
        float: none;
        margin-left: 9.6px;
        text-shadow: none
    }

    .gform_wrapper.gravity-theme .gf_progressbar_blue {
        background: #d2d6dc
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue {
        background-color: #1e7ac4;
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_gray {
        background: #d2d6dc
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_gray {
        background-color: #6b7280;
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_green {
        background: #e8e8e8
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_green {
        background-color: #aac138;
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_orange {
        background: #e8eaec
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_orange {
        background-color: #ff5d38;
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_red {
        background: #e8eaec
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_red {
        background-color: #ec1e31;
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_spring {
        background: #d2d6dc
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_spring {
        background: linear-gradient(270deg,#9cd790,#76d7db);
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_blues {
        background: #d2d6dc
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blues {
        background: linear-gradient(270deg,#00c2ff,#7838e2);
        color: #fff
    }

    .gform_wrapper.gravity-theme .gf_progressbar_rainbow {
        background: #d2d6dc
    }

    .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_rainbow {
        background: linear-gradient(270deg,#1dbeea,#cd6ad6 50%,#f35160);
        color: #fff
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gf_progressbar_percentage:not(.percentbar_100) {
        border-radius: 0 10.5px 10.5px 0
    }

    .gform_wrapper.gravity-theme .gf_page_steps {
        border-bottom: 1px solid #e5e7eb;
        margin-bottom: 16px
    }

    .gform_wrapper.gravity-theme .gf_step {
        display: inline-block;
        margin: 8px 32px 8px 0
    }

    .gform_wrapper.gravity-theme .gf_step_label,.gform_wrapper.gravity-theme .gf_step_number {
        display: table-cell;
        vertical-align: middle
    }

    .gform_wrapper.gravity-theme .gf_step_number {
        background: 0 0;
        border: 2px solid #cfd3d9;
        border-radius: 20px;
        color: #585e6a;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        text-align: center;
        width: 40px
    }

    .gform_wrapper.gravity-theme .gf_step_active .gf_step_number {
        background: #cfd3d9;
        color: #607382
    }

    .gform_wrapper.gravity-theme .gf_step_completed .gf_step_number {
        position: relative
    }

    .gform_wrapper.gravity-theme .gf_step_completed .gf_step_number:before {
        background: #607382;
        border: 2px solid #607382;
        border-radius: 20px;
        content: "";
        display: table-cell;
        height: 40px;
        left: -2px;
        position: absolute;
        top: -2px;
        width: 40px
    }

    .gform_wrapper.gravity-theme .gf_step_completed .gf_step_number:after {
        align-items: center;
        color: #fff;
        content: "\e917";
        display: flex;
        font-family: gform-icons-theme;
        font-size: 24px;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        text-align: center;
        top: 0;
        width: 100%;
        z-index: 5
    }

    .gform_wrapper.gravity-theme .gf_step_label {
        color: inherit;
        font-size: 14px;
        font-weight: 600;
        line-height: 16px;
        padding-left: 16px
    }

    .gform_wrapper.gravity-theme .gf_step_hidden {
        display: none
    }

    .gform_wrapper.gravity-theme .ginput_product_price_wrapper {
        display: inline-block
    }

    .gform_wrapper.gravity-theme .ginput_product_price_wrapper input:-moz-read-only {
        background: 0 0;
        border: none;
        padding: 0
    }

    .gform_wrapper.gravity-theme .ginput_product_price_wrapper input:read-only {
        background: 0 0;
        border: none;
        padding: 0
    }

    .gform_wrapper.gravity-theme .ginput_product_price,.gform_wrapper.gravity-theme .ginput_shipping_price {
        color: #900
    }

    .gform_wrapper.gravity-theme .ginput_total {
        color: #060
    }

    .gform_wrapper.gravity-theme .gfield_repeater_cell {
        margin-top: 8px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_cell label {
        color: #9b9a9a;
        font-size: 12.8px;
        font-weight: 400;
        padding-top: 8px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_items .gfield_repeater_cell:not(:first-child) {
        padding-top: 8px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_wrapper input {
        border: 1px solid #c5c6c5;
        border-radius: 4px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_cell>.gfield_repeater_wrapper {
        background-color: rgba(1,1,1,.02);
        border-bottom: 1px solid #eee;
        border-left: 8px solid #f1f1f1;
        border-radius: 8px;
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.06),0 2px 1px -1px rgba(0,0,0,.06),0 1px 5px 0 rgba(0,0,0,.06);
        padding: 10px 20px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_buttons {
        padding-top: 16px
    }

    .gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_plus:hover,.gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_text:hover,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_minus:hover,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_text:hover {
        background: #fafafa;
        border: 1px solid #757575;
        color: #374750
    }

    .gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_plus:focus,.gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_text:focus,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_minus:focus,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_text:focus {
        outline: 0
    }

    .gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_text,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_text {
        background: hsla(0,0%,95%,.5);
        border: 1px solid hsla(0,0%,46%,.4);
        border-radius: 20px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;
        height: 32px;
        margin-bottom: 8px;
        margin-right: 8px;
        min-width: 100px;
        transition: all .3s cubic-bezier(.67,.17,.4,.83)
    }

    .gform_wrapper.gravity-theme .gfield_repeater_buttons .add_repeater_item_plus,.gform_wrapper.gravity-theme .gfield_repeater_buttons .remove_repeater_item_minus {
        background: hsla(0,0%,95%,.5);
        border: 1px solid hsla(0,0%,46%,.4);
        border-radius: 50%;
        color: #757575;
        font-size: 16px;
        font-weight: 700;
        height: 24px;
        margin: 10px 5px 0;
        padding: 0;
        transition: all .3s cubic-bezier(.67,.17,.4,.83);
        width: 24px
    }

    .gform_wrapper.gravity-theme .gfield_repeater .gfield_repeater_items .gfield_repeater_item:not(:last-child) {
        border-bottom: 2px solid #e0e0e6;
        margin-bottom: 20px;
        margin-right: 8px;
        padding-bottom: 20px
    }

    .gform_wrapper.gravity-theme .gfield_time_hour label.hour_label,.gform_wrapper.gravity-theme .gfield_time_minute label.minute_label {
        display: block;
        font-size: 15px;
        margin: 0;
        padding-top: 5px
    }

    .gform_wrapper.gravity-theme .ginput_container_time {
        flex-basis: min-content;
        max-width: 64px;
        min-width: 64px
    }

    .gform_wrapper.gravity-theme .ginput_container_time input {
        margin-left: 0;
        margin-right: 0;
        min-width: 100%
    }

    .gform_wrapper.gravity-theme .gfield_time_minute {
        position: relative
    }

    .gform_wrapper.gravity-theme .hour_minute_colon {
        line-height: 2;
        padding: 0 8px
    }

    .gform_wrapper.gravity-theme .field_sublabel_above .hour_minute_colon {
        align-self: flex-end
    }

    .gform_wrapper.gravity-theme .gfield_time_ampm {
        align-items: flex-end;
        display: flex;
        margin-left: 16px
    }

    .gform_wrapper.gravity-theme .gfield_time_ampm.below,.gform_wrapper.gravity-theme .hour_minute_colon.below {
        align-items: flex-start
    }

    html[dir=rtl] .gform_wrapper.gravity-theme .gfield_time_ampm {
        margin-left: 0;
        margin-right: 16px
    }
}

@media all {
    .rplg {
        box-sizing: border-box!important;
        font-size: 16px!important;
        line-height: normal
    }

    .rplg *,.rplg *:before,.rplg *:after {
        box-sizing: inherit!important
    }

    .rplg a,.rplg p,.rplg div,.rplg span,.rplg button {
        margin: 0;
        padding: 0;
        border: 0!important;
        font-size: 100%!important;
        font: inherit!important;
        vertical-align: baseline!important
    }

    .rplg a {
        box-shadow: none!important;
        text-align: left
    }

    .rplg ol,.rplg ul {
        list-style: none!important
    }

    .rplg img {
        max-width: 100%!important;
        height: auto!important
    }

    .rplg .rplg-hr {
        margin: 10px 0!important;
        border-top: 1px solid #ddd!important;
        border-bottom: 1px solid #fff!important
    }

    .rplg .rplg-hr2 {
        margin: 15px 0!important;
        border-top: 1px solid #ddd!important;
        border-bottom: 1px solid #fff!important
    }

    .rplg .rplg-hr-fancy {
        border: 0!important;
        height: 1px!important;
        margin: 20px 0!important;
        background: radial-gradient(ellipse at center,rgba(0,0,0,0.1) 0,rgba(0,0,0,0) 75%)!important
    }

    .rplg .rplg-more,.rplg .rplg-hide {
        display: none!important
    }

    .rplg .rplg-more-toggle {
        color: #136aaf!important;
        cursor: pointer!important;
        text-decoration: underline!important
    }

    .rplg .rplg-url {
        display: block;
        margin: 10px 0!important;
        color: #2c7cff!important;
        text-align: center!important;
        box-shadow: none!important;
        outline: 0!important
    }

    .rplg .rplg-trim {
        white-space: nowrap!important;
        overflow: hidden!important;
        text-overflow: ellipsis!important
    }

    .rplg .rplg-star {
        padding: 0 4px 0 0!important;
        line-height: 22px!important
    }

    .rplg .rplg-stars {
        display: inline-block!important
    }

    .rplg .rplg-stars svg {
        display: inline-block!important;
        width: 18px!important;
        height: 18px!important;
        margin: 0 4px 0 0!important;
        vertical-align: middle!important
    }

    .rplg .rplg-row {
        -webkit-box-align: center!important;
        -webkit-align-items: center!important;
        -ms-flex-align: center!important;
        align-items: center!important;
        display: -webkit-box!important;
        display: -webkit-flex!important;
        display: -ms-flexbox!important;
        display: flex!important
    }

    .rplg .rplg-row.rplg-row-start {
        -webkit-box-align: start!important;
        -webkit-align-items: start!important;
        -ms-flex-align: start!important;
        align-items: start!important
    }

    .rplg-row .rplg-row-left {
        position: relative!important;
        -webkit-flex-basis: auto!important;
        -ms-flex-preferred-size: auto!important;
        flex-basis: auto!important;
        -webkit-flex-shrink: 0!important;
        -ms-flex-negative: 0!important;
        flex-shrink: 0!important
    }

    .rplg-row .rplg-row-right {
        -webkit-box-flex: 1!important;
        -webkit-flex-grow: 1!important;
        -ms-flex-positive: 1!important;
        flex-grow: 1!important;
        overflow: hidden!important;
        text-align: left!important;
        line-height: 24px!important
    }

    .rplg-links a,.rplg-links a:focus {
        display: inline-block;
        font-size: 14px!important;
        margin: 0 10px 0 0!important;
        box-shadow: none!important;
        text-decoration: none!important
    }

    .rplg .rplg-stars[data-info*=yelp] svg {
        padding: 3px;
        border-radius: 3px
    }

    .rplg .rplg-stars[data-info*="5,yelp"] svg {
        background: #fb433c
    }

    .rplg .rplg-stars[data-info*="4,yelp"] svg {
        background: #ff643d
    }

    .rplg .rplg-stars[data-info*="4.5,yelp"] svg:nth-child(5) {
        background: linear-gradient(90deg,#ff643d 50%,#bbbac0 50%)
    }

    .rplg .rplg-stars[data-info*="3,yelp"] svg,.rplg .rplg-stars[data-info*="3.5,yelp"] svg {
        background: #ff8742
    }

    .rplg .rplg-stars[data-info*="3.5,yelp"] svg:nth-child(5) {
        background: #bbbac0
    }

    .rplg .rplg-stars[data-info*="3.5,yelp"] svg:nth-child(4) {
        background: linear-gradient(90deg,#ff8742 50%,#bbbac0 50%)
    }

    .rplg .rplg-stars[data-info*="4,yelp"] svg:nth-child(5),.rplg .rplg-stars[data-info*="3,yelp"] svg:nth-child(5),.rplg .rplg-stars[data-info*="3,yelp"] svg:nth-child(4),.rplg .rplg-stars[data-info*="2,yelp"] svg,.rplg .rplg-stars[data-info*="2.5,yelp"] svg,.rplg .rplg-stars[data-info*="1,yelp"] svg,.rplg .rplg-stars[data-info*="1.5,yelp"] svg {
        background: #bbbac0
    }

    .rplg .rplg-stars[data-info*="2,yelp"] svg:nth-child(1),.rplg .rplg-stars[data-info*="2,yelp"] svg:nth-child(2),.rplg .rplg-stars[data-info*="2.5,yelp"] svg:nth-child(1),.rplg .rplg-stars[data-info*="2.5,yelp"] svg:nth-child(2) {
        background: #ffad48
    }

    .rplg .rplg-stars[data-info*="2.5,yelp"] svg:nth-child(3) {
        background: linear-gradient(90deg,#ffad48 50%,#bbbac0 50%)
    }

    .rplg .rplg-stars[data-info*="1,yelp"] svg:nth-child(1),.rplg .rplg-stars[data-info*="1.5,yelp"] svg:nth-child(1) {
        background: #ffcc4b
    }

    .rplg .rplg-stars[data-info*="1.5,yelp"] svg:nth-child(2) {
        background: linear-gradient(90deg,#ffcc4b 50%,#bbbac0 50%)
    }

    .rplg .rplg-box {
        position: relative!important;
        margin: 2px!important;
        color: #777!important;
        border: 1px solid #ededed!important;
        background-color: #fafafa!important;
        border-radius: 4px!important
    }

    .rplg .rplg-box-tiny {
        position: relative!important;
        margin: 2px!important;
        color: #777!important
    }

    .rplg-box .rplg-box-content {
        position: static!important;
        height: 100px!important;
        overflow-y: auto!important;
        font-size: 14px!important;
        text-align: left!important;
        padding: 0 2px 0 0!important
    }

    .rplg-box .rplg-box-content::-webkit-scrollbar {
        width: 4px!important
    }

    .rplg-box .rplg-box-content::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3)!important;
        -webkit-border-radius: 4px!important;
        border-radius: 4px!important
    }

    .rplg-box .rplg-box-content::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px!important;
        border-radius: 10px!important;
        background: #ccc!important;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.5)!important
    }

    .rplg-box .rplg-box-content::-webkit-scrollbar-thumb:window-inactive {
        background: #ccc!important
    }

    .rplg .rplg-review-avatar {
        display: block!important;
        width: 56px!important;
        height: 56px!important;
        font-style: italic!important;
        padding: 0!important;
        margin: 0 10px 0 0!important;
        border-radius: 50%!important;
        vertical-align: middle!important;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24)!important
    }

    .rplg .rplg-review-name {
        display: block!important;
        font-size: 100%!important;
        font-weight: 700!important;
        color: #154fc1!important;
        text-decoration: none!important;
        box-shadow: none!important
    }

    .rplg .rplg-review-text {
        color: #333!important;
        line-height: 24px!important;
        font-size: 14px!important
    }

    .rplg .rplg-review-time {
        display: block!important;
        color: #555!important;
        font-size: 13px!important;
        text-shadow: 1px 1px 0 #fff!important
    }

    .rplg .rplg-dark .rplg-review-time {
        text-shadow: none!important
    }

    .rplg .rplg-review-badge {
        top: 12px!important;
        right: 12px!important;
        position: absolute!important;
        background-color: inherit!important
    }

    .rplg .rplg-social-logo svg {
        width: 20px!important;
        height: 20px!important;
        background: 0 0!important;
        border-radius: 50%!important
    }

    .rplg .rplg-social-logo.rplg-facebook-logo svg {
        width: 20px!important;
        height: 20px!important;
        padding: 2px!important;
        background-color: #3c5b9b!important
    }

    .rplg-slider {
        position: relative
    }

    .rplg-slider .rplg-slider-prev,.rplg-slider .rplg-slider-next {
        position: absolute!important;
        top: 50%!important;
        width: 30px;
        height: 30px;
        background: #eee;
        border-radius: 50%;
        margin-top: -22px!important;
        z-index: 10!important;
        cursor: pointer!important;
        -webkit-user-select: none!important;
        -moz-user-select: none!important;
        -ms-user-select: none!important;
        user-select: none!important
    }

    .rplg-slider .rplg-slider-prev {
        left: -35px!important
    }

    .rplg-slider .rplg-slider-next {
        right: -35px!important
    }

    .rplg-slider .rplg-slider-prev span,.rplg-slider .rplg-slider-next span {
        position: absolute!important;
        top: 48%!important;
        left: 40%!important;
        color: #777!important;
        direction: ltr!important;
        font: normal 300 28px/0 "Muli",Helvetica,Arial,Verdana,sans-serif!important
    }

    .rplg-slider .rplg-slider-review {
        margin: 20px 0 40px!important
    }

    .rplg-slider .rplg-box:before {
        position: absolute!important;
        bottom: -8px!important;
        left: 35px!important;
        display: block!important;
        width: 14px!important;
        height: 14px!important;
        border: 1px solid #ededed!important;
        border-top: 0!important;
        border-left: 0!important;
        background-color: #fafafa!important;
        content: ""!important;
        -webkit-transform: rotate(45deg)!important;
        -ms-transform: rotate(45deg)!important;
        transform: rotate(45deg)!important
    }

    .rplg-slider .rplg-box .rplg-box-content {
        height: 150px!important;
        margin: 20px 20px 20px 40px!important;
        background-color: inherit!important
    }

    .rplg-slider .rplg-box .rplg-box-content:before {
        bottom: 47px!important;
        box-sizing: border-box!important;
        color: #bbb!important;
        content: '\201C'!important;
        display: block!important;
        height: 96px!important;
        left: 50px!important;
        position: absolute!important;
        right: 515.391px!important;
        text-size-adjust: 100%!important;
        top: 20px!important;
        width: 24.6094px!important;
        column-rule-color: #bbb!important;
        perspective-origin: 12.2969px 48px!important;
        transform-origin: 12.2969px 48px!important;
        border: 0 #bbb!important;
        font: normal normal normal normal 60px/96px Georgia,serif!important;
        margin: -25px 0 0 -40px!important;
        outline: #bbb 0!important
    }

    .rplg-slider .rplg-stars {
        display: inline-block!important;
        margin-right: 4px!important
    }

    .rplg-slider .rplg-row {
        margin: 0!important;
        padding: 20px!important
    }

    .rplg-grid .rplg-grid-row {
        display: -webkit-flex!important;
        display: -ms-flexbox!important;
        display: flex!important;
        -webkit-flex-flow: row wrap!important;
        -ms-flex-flow: row wrap!important;
        flex-flow: row wrap!important;
        margin: 0 auto!important;
        -webkit-align-items: stretch!important;
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }

    .rplg-grid .rplg-col {
        box-sizing: border-box!important
    }

    .rplg-grid .rplg-col-6 {
        margin: 0 4px 8px!important;
        width: calc(50% - 8px)!important
    }

    @media(min-width: 840px) {
        .rplg-grid .rplg-col-12 {
            margin:0 6px 12px!important;
            width: calc(100% - 12px)!important
        }

        .rplg-grid .rplg-col-4 {
            margin: 0 6px 12px!important;
            width: calc(25% - 12px)!important
        }

        .rplg-grid .rplg-col-3 {
            margin: 0 6px 12px!important;
            width: calc(33.3333333333% - 12px)!important
        }

        .rplg-grid .rplg-col-2 {
            margin: 0 6px 12px!important;
            width: calc(50% - 12px)!important
        }
    }

    @media(max-width: 839px) and (min-width:480px) {
        .rplg-grid .rplg-col-12 {
            margin:0 4px 8px!important;
            width: calc(100% - 12px)!important
        }

        .rplg-grid .rplg-col-4,.rplg-grid .rplg-col-3,.rplg-grid .rplg-col-2 {
            margin: 0 4px 8px!important;
            width: calc(50% - 8px)!important
        }
    }

    @media(max-width: 479px) {
        .rplg-grid .rplg-col-12 {
            margin:0 4px 8px!important;
            width: calc(100% - 12px)!important
        }

        .rplg-grid .rplg-col-6,.rplg-grid .rplg-col-4,.rplg-grid .rplg-col-3,.rplg-grid .rplg-col-2 {
            margin: 0 4px 8px!important;
            width: calc(100% - 8px)!important
        }
    }

    .rplg-grid .rplg-box {
        padding: 20px!important
    }

    .rplg-grid .rplg-biz-name {
        padding-right: 10px!important
    }

    .rplg-grid .rplg-review-name {
        line-height: 18px!important;
        padding-right: 10px!important
    }

    .rplg-grid .rplg-stars {
        white-space: nowrap!important
    }

    .rplg-grid .rplg-review-time {
        margin: 2px 0 0!important;
        line-height: 18px!important
    }

    .rplg-grid .rplg-box-content {
        margin: 10px 0 0!important
    }

    .rplg .rplg-biz-name {
        color: #333!important;
        font-size: 15px!important;
        font-weight: 600!important
    }

    .rplg .rplg-biz-name a {
        text-decoration: none!important
    }

    .rplg .rplg-biz-rating.rplg-trim {
        overflow: visible!important
    }

    .rplg .rplg-biz-rating .rplg-biz-score {
        display: inline-block!important;
        color: #0caa41!important;
        font-size: 18px!important;
        font-weight: 600!important;
        margin: 0 8px 0 0!important;
        vertical-align: middle!important
    }

    .rplg .rplg-biz-rating.rplg-biz-google .rplg-biz-score {
        color: #fb8e28!important
    }

    .rplg .rplg-biz-rating.rplg-biz-facebook .rplg-biz-score {
        color: #3c5b9b!important
    }

    .rplg .rplg-biz-rating.rplg-biz-yelp .rplg-biz-score {
        color: #d32323!important
    }

    .rplg .rplg-biz-based {
        display: block!important;
        color: #777!important;
        font-size: 14px!important;
        text-align: left!important;
        text-shadow: 1px 1px 0 #fff!important
    }

    .rplg .rplg-dark .rplg-biz-based {
        color: #ccc!important;
        text-shadow: none!important
    }

    .rplg .rplg-biz-based .rplg-social-logo svg {
        display: inline-block!important;
        margin: 0 4px!important;
        vertical-align: middle!important
    }

    .rplg .rplg-biz-based .rplg-biz-based-text {
        vertical-align: middle!important
    }

    .rplg-badge-cnt.rplg-badge-center {
        text-align: center!important
    }

    .rplg .rplg-badge-fixed {
        position: fixed!important;
        right: 30px!important;
        bottom: 30px!important;
        max-width: none!important;
        z-index: 2147482999!important
    }

    .rplg .rplg-badge_left-fixed {
        position: fixed!important;
        left: 30px!important;
        bottom: 30px!important;
        max-width: none!important;
        z-index: 2147482999!important
    }

    .rplg .rplg-badge {
        display: inline-block;
        margin: 0 10px 10px 0!important;
        border-left: 6px solid #0caa41!important;
        box-shadow: 2px 3px 10px rgba(0,0,0,.12)!important
    }

    .rplg-badge-fixed .rplg-badge,.rplg-badge_left-fixed .rplg-badge {
        display: block
    }

    .rplg-badge[data-provider=google] {
        border-left-color: #fb8e28!important
    }

    .rplg-badge[data-provider=facebook] {
        border-left-color: #3c5b9b!important
    }

    .rplg-badge[data-provider=yelp] {
        border-left-color: #d32323!important
    }

    .rplg-badge.rplg-badge-block {
        display: block
    }

    .rplg-badge.rplg-badge-clickable {
        cursor: pointer!important
    }

    .rplg-badge.rplg-badge-clickable:hover .rplg-badge-btn {
        background-color: #f9f9f9!important
    }

    .rplg-badge .rplg-badge-btn {
        width: 270px!important;
        position: relative!important;
        padding: 10px 24px 10px 10px!important;
        background: #fff!important;
        transition: all .2s ease-in-out!important
    }

    .rplg-badge.rplg-badge-block .rplg-badge-btn {
        width: auto!important
    }

    .rplg-badge .rplg-badge-menu {
        position: absolute!important;
        top: 0!important;
        right: 0!important;
        margin: 0!important;
        padding: 8px!important;
        cursor: pointer!important;
        border: 0!important;
        background-color: transparent!important;
        box-shadow: none!important;
        outline: 0!important
    }

    .rplg-badge .rplg-badge-menu svg {
        width: 20px!important;
        height: 20px!important
    }

    .rplg-badge .rplg-badge-menu svg circle {
        fill: #999!important;
        transition: all .2s ease-in-out!important
    }

    .rplg-badge .rplg-badge-menu:hover svg circle {
        fill: #555!important
    }

    .rplg-badge .rplg-badge-actions {
        position: absolute!important;
        right: 5px!important;
        top: 33px!important;
        background: none repeat scroll 0 0 #fff!important;
        border: 1px solid #ccc!important;
        border-radius: 3px!important;
        -webkit-border-radius: 3px!important;
        -moz-border-radius: 3px!important;
        list-style-type: none!important;
        margin: 3px 0 0!important;
        padding: 0!important;
        z-index: 999999!important;
        text-align: left!important;
        box-shadow: 0 1px 6px rgba(0,0,0,.15)!important;
        -webkit-box-shadow: 0 1px 6px rgba(0,0,0,.15)!important;
        -moz-box-shadow: 0 1px 6px rgba(0,0,0,.15)!important
    }

    .rplg-badge .rplg-badge-actions .rplg-links a {
        display: block!important;
        margin: 0!important;
        padding: 1px 5px!important
    }

    .rplg-badge .rplg-badge-actions .rplg-links a:hover {
        background: #ccc!important
    }

    .rplg-badge .rplg-row {
        margin: 0!important;
        padding: 0!important
    }

    .rplg-badge .rplg-badge-logo {
        margin: 0 10px 0 0!important
    }

    .rplg-badge .rplg-badge-logo .rplg-review-avatar {
        display: inline-block!important;
        width: 50px!important;
        height: 50px!important;
        margin-right: 0!important;
        border-radius: 50%!important;
        box-shadow: none!important
    }

    .rplg-badge .rplg-badge-logo>svg {
        width: 50px!important;
        height: 50px!important;
        vertical-align: middle!important
    }

    .rplg-badge[data-provider=facebook] .rplg-badge-logo>svg {
        padding: 4px!important;
        border-radius: 50%!important;
        background-color: #3c5b9b!important
    }

    @media(max-width: 768px) {
        .rplg .rplg-flash.rplg-flash-hide,.rplg-badge-cnt.rplg-badge-fixed.rplg-badge-hide,.rplg-badge-cnt.rplg-badge_left-fixed.rplg-badge-hide {
            display:none!important
        }
    }

    .rplg .rplg-badge .rplg-social-logo svg {
        width: 16px!important;
        height: 16px!important
    }

    .rplg .rplg-badge .rplg-social-logo.rplg-facebook-logo svg {
        width: 12px!important;
        height: 12px!important
    }

    .rplg-badge .rplg-social-logo {
        position: absolute!important;
        right: 6px!important
    }

    .rplg-badge .rplg-social-logo.rplg-google-logo {
        top: 6px!important
    }

    .rplg-badge .rplg-social-logo.rplg-facebook-logo {
        top: 27px!important
    }

    .rplg-badge .rplg-social-logo.rplg-yelp-logo {
        top: 50px!important
    }

    .rplg .rplg-badge2 {
        display: inline-block;
        position: relative!important;
        text-align: left!important;
        border-radius: 2px!important;
        margin: 10px 10px 0 0!important;
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif!important;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.26)!important
    }

    .rplg-badge-fixed .rplg-badge2,.rplg-badge_left-fixed .rplg-badge2 {
        display: none;
        margin: 10px 10px 0 0!important
    }

    .rplg-badge2.rplg-badge-block {
        display: block
    }

    .rplg-badge2 .rplg-badge2-border {
        width: 100%!important;
        height: 6px!important;
        background: #4fce6a!important;
        border-radius: 2px 2px 0 0!important
    }

    .rplg-badge2 .rplg-badge2-btn {
        display: flex!important;
        align-items: center!important;
        position: relative!important;
        padding: 10px!important;
        z-index: 999!important;
        color: #333!important;
        background: #fff!important;
        border-radius: 0 0 2px 2px!important;
        transition: all .2s ease-in-out!important
    }

    .rplg-badge2 .rplg-badge2-btn.rplg-badge2-clickable {
        cursor: pointer!important
    }

    .rplg-badge2 .rplg-badge2-btn.rplg-badge2-clickable:hover {
        background: #f3f3f5!important
    }

    .rplg-badge2 .rplg-badge2-btn img {
        display: inline-block!important;
        width: 44px!important;
        height: 44px!important;
        max-width: none!important;
        margin: 0!important;
        box-shadow: none!important
    }

    .rplg-badge2 .rplg-badge2-close {
        display: none;
        position: absolute!important;
        top: -12px!important;
        right: -18px!important;
        width: 16px!important;
        height: 16px!important;
        line-height: 16px!important;
        text-align: center!important;
        cursor: pointer!important;
        text-decoration: none!important;
        color: #555!important;
        font-size: 18px!important;
        font-family: Arial,sans-serif!important;
        border-radius: 50%!important;
        background-color: rgba(255,255,255,.5)!important
    }

    .rplg-badge-cnt:hover .rplg-badge2-close {
        display: block
    }

    .rplg-badge2 .rplg-badge2-close:hover {
        color: #333!important;
        background-color: rgba(255,255,255,.7)!important
    }

    .rplg-badge2 svg {
        display: inline-block;
        width: auto;
        height: auto;
        vertical-align: middle!important
    }

    .rplg-badge2 .rplg-badge2-btn .rplg-badge-logo>svg {
        width: 44px!important;
        height: 44px!important
    }

    .rplg-badge2[data-provider=facebook] .rplg-badge-logo>svg {
        padding: 4px!important;
        border-radius: 50%!important;
        background-color: #3c5b9b!important
    }

    .rplg-badge2 .rplg-badge2-score {
        display: inline-block;
        font-size: 14px!important;
        line-height: 20px!important;
        margin: 0 0 0 8px!important;
        vertical-align: middle!important
    }

    .rplg .rplg-badge2 .rplg-biz-rating>div {
        font-size: 20px!important;
        font-weight: 400!important
    }

    .rplg .rplg-form {
        position: fixed!important;
        bottom: 0!important;
        right: 0!important;
        height: 100%!important;
        width: 368px!important;
        z-index: 2147483000!important
    }

    .rplg .rplg-form.rplg-form-left {
        left: 0!important
    }

    @media(max-width: 460px) {
        .rplg .rplg-form {
            width:100%!important
        }
    }

    .rplg-form .rplg-form-head {
        position: absolute!important;
        top: 0!important;
        right: 0!important;
        width: 100%!important;
        height: 80px!important;
        background: #fff!important;
        padding: 10px 16px!important;
        overflow: hidden!important;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.12)!important;
        z-index: 2147483002!important;
        box-sizing: border-box!important
    }

    .rplg-form .rplg-form-head-inner {
        z-index: 2147483000!important;
        position: absolute!important;
        left: 20px!important;
        top: 15px!important;
        width: 100%!important;
        height: 100%!important;
        padding: 0 40px 0 0!important;
        pointer-events: none!important
    }

    .rplg-form .rplg-head-info .rplg-review-name {
        color: #000!important
    }

    .rplg-form .rplg-form-close {
        padding: 0!important;
        cursor: pointer!important;
        outline: 0!important;
        border: 0!important;
        background: 0 0!important;
        min-height: 0!important;
        width: auto!important;
        float: right!important;
        font-size: 32px!important;
        font-weight: 500!important;
        line-height: .6!important;
        color: #999!important;
        -webkit-appearance: none!important
    }

    .rplg-form .rplg-form-close:hover {
        color: #555!important
    }

    .rplg-form .rplg-form-body {
        position: absolute!important;
        top: 0!important;
        right: 0!important;
        bottom: 0!important;
        width: 100%!important;
        background: rgba(250,250,251,.98)!important;
        border-left: 1px solid #dadee2!important;
        box-shadow: 0 0 4px 1px rgba(0,0,0,.08)!important;
        z-index: 2147483000!important
    }

    .rplg-form .rplg-form-content {
        position: absolute!important;
        top: 0!important;
        right: 0!important;
        bottom: 0!important;
        width: 100%!important;
        overflow-y: auto!important;
        z-index: 2147483001!important;
        -webkit-transform: translateZ(0)!important
    }

    .rplg-form .rplg-form-content {
        top: 80px!important;
        bottom: 48px!important
    }

    .rplg-form .rplg-form-content-inner {
        position: relative!important;
        min-height: 100%!important;
        margin: 0 auto!important;
        padding: 15px 0 15px 20px!important
    }

    .rplg-form .rplg-list-review {
        position: relative!important
    }

    .rplg-form .rplg-links {
        text-align: center!important
    }

    .rplg-form .rplg-links a {
        padding: 2px 8px!important;
        background-color: #eee!important;
        border: 1px solid #dedede!important;
        text-shadow: 1px 1px 0 #f5f5f5!important;
        transition: all .2s ease-in-out!important
    }

    .rplg-form .rplg-links a:hover {
        background-color: #dfdfdf!important
    }

    .rplg-form .rplg-form-footer {
        position: absolute!important;
        bottom: 0!important;
        right: 0!important;
        width: 100%!important;
        height: 48px!important;
        text-align: center!important;
        z-index: 2147483002!important;
        background: #fff!important;
        box-shadow: 0 -1px 2px 0 rgba(0,0,0,.06)!important;
        -moz-text-align-last: center!important;
        text-align-last: center!important
    }

    .rplg-form .rplg-form-footer img {
        padding: 16px!important
    }

    .rplg-form .rplg-powered {
        color: #999!important;
        margin: 12px 0 0!important;
        font-size: 14px!important
    }

    .rplg-form .rplg-facebook-powered span {
        color: #4080ff!important;
        font-weight: 700!important;
        font-size: 15px!important
    }

    .rplg-form .rplg-yelp-logo {
        margin: 6px 0 0!important
    }

    .rplg-form .rplg-yelp-logo img {
        float: none!important;
        width: 60px!important;
        padding: 0!important;
        vertical-align: bottom!important
    }

    .rplg-form .rplg-review-avatar {
        width: 50px!important;
        height: 50px!important;
        box-shadow: none!important
    }

    .rplg-form .rplg-review-name {
        font-size: 14px!important
    }

    .rplg-form .rplg-form-review {
        margin-bottom: 15px!important
    }

    .rplg-list2 .rplg-social-ratings .rplg-row {
        margin: 0 0 10px!important
    }

    .rplg-list2 .rplg-social-ratings .rplg-row:last-child {
        margin: 0!important
    }

    .rplg-list2 .rplg-social-ratings .rplg-social-logo {
        display: block!important;
        width: 56px!important
    }

    .rplg-list2 .rplg-social-logo svg {
        margin: 0 auto!important
    }

    .rplg-list2 .rplg-social-rating {
        font-size: 1.1em!important;
        margin: 0 6px 0 0!important
    }

    .rplg-list2 .rplg-google-rating {
        color: #fb8e28!important
    }

    .rplg-list2 .rplg-facebook-rating {
        color: #4080ff!important
    }

    .rplg-list2 .rplg-yelp-rating {
        color: #d32323!important
    }

    .rplg-list2 .rplg-box-content {
        height: auto!important;
        margin: 10px 0 0!important
    }

    .rplg-list2 .rplg-box {
        padding: 20px!important;
        margin-bottom: 15px!important
    }

    .rplg-list2 .rplg-row:last-child {
        margin-bottom: 0!important
    }

    .rplg-list2 .rplg-stars {
        display: inline-block!important;
        margin-right: 4px!important
    }

    .rplg-list2 .rplg-review-text {
        vertical-align: middle!important
    }

    .rplg-list .rplg-list-header {
        margin: 0 0 15px!important
    }

    .rplg-list .rplg-list-header:last-child {
        margin: 0!important
    }

    .rplg-list .rplg-list-reviews {
        position: relative!important;
        min-height: 100%!important;
        margin: 0 auto!important
    }

    .rplg-list .rplg-list-review {
        margin: 0 0 15px!important
    }

    .rplg-list .rplg-list-review:last-child {
        margin: 0!important
    }

    .rplg-list .rplg-review-avatar {
        width: 50px!important;
        height: 50px!important;
        min-height: 50px!important;
        max-height: 50px!important
    }

    .rplg-list .rplg-review-name {
        color: #427fed!important;
        font-size: 100%!important;
        font-weight: 700!important;
        padding-right: 6px!important;
        text-decoration: none!important;
        box-shadow: none!important
    }

    .rplg-list .rplg-review-time {
        font-size: 13px!important;
        line-height: unset!important
    }

    .rplg-list .rplg-review-count,.rplg-list .rplg-google-powered,.rplg-list .rplg-facebook-powered {
        margin: 6px 0 0!important;
        color: #999!important
    }

    .rplg-list .rplg-facebook-powered span {
        color: #4080ff!important;
        font-weight: 700!important;
        font-size: 15px!important
    }

    .rplg-list .rplg-review-text {
        color: #222!important;
        font-size: 13px!important;
        line-height: 18px!important;
        max-width: 100%!important;
        overflow: hidden!important;
        white-space: pre-line!important
    }

    .rplg-list .rplg-review-badge {
        top: auto!important;
        bottom: -1px!important;
        right: 9px!important;
        background-color: #f5f5f5!important;
        border-radius: 50%!important
    }

    .rplg-list .rplg-social-logo svg {
        display: block
    }

    .rplg .rplg-dark .rplg-box {
        background-color: #333!important
    }

    .rplg .rplg-dark.rplg-slider .rplg-box:before {
        background-color: #333!important
    }

    .rplg .rplg-dark .rplg-biz-name a {
        color: #eee!important
    }

    .rplg .rplg-dark .rplg-links a {
        color: #fff!important
    }

    .rplg .rplg-dark .rplg-review-name {
        color: #eee!important
    }

    .rplg .rplg-dark .rplg-review-text {
        color: #fff!important
    }

    .rplg .rplg-dark .rplg-review-time {
        color: #ccc!important
    }

    .rplg .rplg-dark .rplg-powered {
        color: #999!important
    }

    .rplg .rplg-rating img,.rplg .rplg-review img {
        display: inline-block!important
    }

    .rplg .rplg-rating-name,.rplg .rplg-rating-info {
        vertical-align: middle!important
    }

    .rplg .rplg-rating-name {
        margin-right: 6px!important
    }

    .rplg .rplg-rating-info {
        margin-left: 4px!important
    }

    .rplg .rplg-flash-wrap {
        display: block!important;
        position: fixed!important;
        left: 0!important;
        top: 100%!important;
        width: auto!important;
        font-size: 16px!important;
        z-index: 999999999999!important
    }

    .rplg .rplg-flash-wrap.rplg-flash-right {
        left: auto!important;
        right: 0!important
    }

    .rplg .rplg-flash-content {
        opacity: 0!important;
        padding: 18px!important;
        -webkit-transform: translate(0px,0%)!important;
        -ms-transform: translate(0px,0%)!important;
        transform: translate(0px,0%)!important;
        -webkit-transition: opacity 300ms ease,-webkit-transform 300ms ease!important;
        transition: opacity 300ms ease,-webkit-transform 300ms ease!important;
        transition: transform 300ms ease,opacity 300ms ease!important;
        transition: transform 300ms ease,opacity 300ms ease,-webkit-transform 300ms ease!important
    }

    .rplg .rplg-flash-content.rplg-flash-visible {
        opacity: 1!important;
        -webkit-transform: translate(0px,-100%)!important;
        -ms-transform: translate(0px,-100%)!important;
        transform: translate(0px,-100%)!important;
        text-align: left!important
    }

    .rplg .rplg-flash-content.rplg-flash-visible.rplg-flash-gout {
        opacity: .5!important;
        -webkit-transition: opacity 150ms ease!important;
        transition: opacity 150ms ease!important;
        transition: opacity 150ms ease!important;
        transition: opacity 150ms ease!important
    }

    .rplg .rplg-flash-card {
        position: relative!important;
        display: -webkit-box!important;
        display: -webkit-flex!important;
        display: -ms-flexbox!important;
        display: flex!important;
        height: 400px!important;
        max-height: 82px!important;
        max-width: 100%!important;
        color: #8d8d8d!important;
        font-size: 12px!important;
        -webkit-box-orient: vertical!important;
        -webkit-box-direction: normal!important;
        -webkit-flex-direction: column!important;
        -ms-flex-direction: column!important;
        flex-direction: column!important;
        -webkit-box-pack: center!important;
        -webkit-justify-content: center!important;
        -ms-flex-pack: center!important;
        justify-content: center!important;
        -webkit-box-align: start!important;
        -webkit-align-items: flex-start!important;
        -ms-flex-align: start!important;
        align-items: flex-start!important;
        border-radius: 20px!important;
        background-color: #fff!important;
        box-shadow: 0 1px 5px 0 rgb(0 0 0/20%),0 3px 1px -2px rgb(0 0 0/12%),0 2px 2px 0 rgb(0 0 0/14%)!important;
        -webkit-transition: max-height 300ms ease,opacity 300ms ease,-webkit-transform 300ms ease!important;
        transition: max-height 300ms ease,opacity 300ms ease,-webkit-transform 300ms ease!important;
        transition: max-height 300ms ease,opacity 300ms ease,transform 300ms ease!important;
        transition: max-height 300ms ease,opacity 300ms ease,transform 300ms ease,-webkit-transform 300ms ease!important;
        cursor: pointer!important
    }

    .rplg .rplg-flash-card:hover {
        box-shadow: 0 5px 5px -3px rgb(0 0 0/20%),0 3px 14px 2px rgb(0 0 0/12%),0 8px 10px 1px rgb(0 0 0/14%)!important;
        opacity: 1!important;
        -webkit-transform: translate(0px,-2px)!important;
        -ms-transform: translate(0px,-2px)!important;
        transform: translate(0px,-2px)!important
    }

    .rplg .rplg-flash-card.rplg-flash-expanded {
        height: 400px!important;
        max-height: 400px!important
    }

    .rplg .rplg-flash-x {
        position: absolute!important;
        top: 10px!important;
        right: -2px!important;
        z-index: 3!important;
        width: 22px!important;
        height: 22px!important;
        opacity: .5!important;
        border-radius: 20px!important;
        background-color: #fafafa!important;
        -webkit-transform: translate(0px,-30px)!important;
        -ms-transform: translate(0px,-30px)!important;
        transform: translate(0px,-30px)!important;
        -webkit-transition: opacity 200ms ease,-webkit-transform 200ms ease!important;
        transition: opacity 200ms ease,-webkit-transform 200ms ease!important;
        transition: opacity 200ms ease,transform 200ms ease!important;
        transition: opacity 200ms ease,transform 200ms ease,-webkit-transform 200ms ease!important;
        color: #373737!important;
        font-size: 18px!important;
        line-height: 22px!important;
        text-align: center!important;
        cursor: pointer!important
    }

    .rplg .rplg-flash-x {
        transform: translate(0,0)!important;
        opacity: 0!important
    }

    .rplg .rplg-flash-content:hover .rplg-flash-x {
        transform: translate(0px,-10px)!important;
        opacity: 1!important
    }

    .rplg .rplg-flash-x svg {
        display: inline-block;
        width: 12px!important;
        height: 12px!important
    }

    .rplg .rplg-flash-story {
        position: relative!important;
        display: -webkit-box!important;
        display: -webkit-flex!important;
        display: -ms-flexbox!important;
        display: flex!important;
        -webkit-box-align: center!important;
        -webkit-align-items: center!important;
        -ms-flex-align: center!important;
        align-items: center!important;
        z-index: 1!important;
        width: 100%!important;
        height: 82px!important;
        opacity: 1!important;
        padding: 8px 12px!important;
        -webkit-transition: opacity 200ms ease!important;
        transition: opacity 200ms ease!important
    }

    .rplg .rplg-flash-expanded .rplg-flash-story {
        opacity: 0!important
    }

    .rplg .rplg-flash-img {
        width: 50px!important;
        height: 50px!important;
        padding: 4px!important;
        margin-right: 10px!important
    }

    .rplg .rplg-flash-img svg {
        display: inline-block;
        width: auto;
        height: auto
    }

    .rplg .rplg-flash-img .rplg-review-avatar {
        width: 50px!important;
        height: auto!important
    }

    .rplg .rplg-flash-text,.rplg .rplg-flash-stars {
        color: #333!important;
        font-size: 13px!important;
        white-space: nowrap
    }

    .rplg .rplg-flash-text span,.rplg .rplg-flash-stars svg {
        vertical-align: middle!important
    }

    .rplg .rplg-flash-stars .rplg-flash-star svg {
        display: inline-block;
        width: 14px!important;
        height: 14px!important
    }

    .rplg .rplg-flash-stars .rplg-flash-star[data-provider=yelp] svg {
        padding: 2px!important
    }

    .rplg .rplg-flash-stars .rplg-flash-logo svg {
        display: inline-block;
        width: 16px!important;
        height: 16px!important
    }

    .rplg .rplg-flash-stars .rplg-flash-logo[data-provider=facebook] svg {
        padding: 2px!important;
        border-radius: 50%!important;
        background-color: #3c5b9b!important
    }

    .rplg .rplg-flash-text .rplg-review-avatar {
        display: inline-block!important;
        width: 16px!important;
        height: 16px!important;
        margin: -4px 6px 0 2px!important
    }

    .rplg .rplg-flash-text .rplg-flash-name {
        display: inline-block;
        color: #00a3ff!important;
        font-weight: 600!important;
        width: 55px!important;
        white-space: nowrap!important;
        overflow: hidden!important;
        text-overflow: ellipsis!important
    }

    .rplg .rplg-flash-footer {
        font-size: 11px!important;
        line-height: 20px!important;
        font-weight: 600!important
    }

    .rplg .rplg-flash-power {
        float: right;
        font-size: 11px!important;
        font-weight: 400!important
    }

    .rplg .rplg-flash-power svg {
        display: inline-block;
        width: 14px;
        height: 14px;
        margin-right: 2px;
        vertical-align: middle
    }

    .rplg .rplg-flash-power a {
        color: #8d8d8d!important;
        text-decoration: none
    }

    .rplg .rplg-flash-power a span {
        font-weight: 600!important;
        text-transform: capitalize!important
    }

    .rplg .rplg-flash-power a span:hover {
        text-decoration: underline
    }

    .rplg .rplg-flash-form {
        position: absolute!important;
        left: 0!important;
        top: 0!important;
        overflow: auto!important;
        width: 100%!important;
        max-height: 100%!important;
        border-radius: 20px!important;
        opacity: 0!important;
        -webkit-transition: opacity 200ms ease!important;
        transition: opacity 200ms ease!important
    }

    .rplg .rplg-flash-expanded .rplg-flash-form {
        z-index: 2!important;
        opacity: 1!important;
        overflow-y: auto!important
    }

    .rplg .rplg-form-review.rplg-highlight {
        background: #f9f9f9
    }

    .rplg .rplg-flash-form .rplg-list-review {
        padding: 10px 20px
    }

    .rplg .rplg-flash-form .rplg-review-badge {
        top: auto!important;
        bottom: 0!important;
        right: 6px!important
    }

    .rplg .grw-slider {
        display: block!important;
        width: 100%!important;
        padding-bottom: 20px!important;
        text-align: left!important;
        direction: ltr!important;
        box-sizing: border-box!important
    }

    .rplg .grw-slider .grw-row {
        display: -ms-flexbox!important;
        display: flex!important;
        flex-wrap: nowrap!important;
        align-items: center!important;
        -ms-flex-wrap: nowrap!important;
        -ms-flex-align: center!important
    }

    .rplg .grw-slider .grw-row-xs {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }

    .rplg .grw-row-xs .grw-slider-header,.rplg .grw-row-xs .grw-slider-content,.rplg .grw-row-xs .grw-slider-review {
        -ms-flex: 0 0 100%!important;
        flex: 0 0 100%!important;
        max-width: 100%!important
    }

    .rplg .grw-row-x .grw-slider-header,.rplg .grw-row-x .grw-slider-header+.grw-slider-content,.rplg .grw-row-x .grw-slider-review {
        -ms-flex: 0 0 50%!important;
        flex: 0 0 50%!important;
        max-width: 50%!important
    }

    .rplg .grw-row-x .grw-slider-header+.grw-slider-content .grw-slider-review {
        -ms-flex: 0 0 100%!important;
        flex: 0 0 100%!important;
        max-width: 100%!important
    }

    .rplg .grw-row-s .grw-slider-header {
        -ms-flex: 0 0 33.333333%!important;
        flex: 0 0 33.333333%!important;
        max-width: 33.333333%!important
    }

    .rplg .grw-row-s .grw-slider-header+.grw-slider-content {
        -ms-flex: 0 0 66.666666%!important;
        flex: 0 0 66.666666%!important;
        max-width: 66.666666%!important
    }

    .rplg .grw-row-s .grw-slider-review {
        -ms-flex: 0 0 50%!important;
        flex: 0 0 50%!important;
        max-width: 50%!important
    }

    .rplg .grw-row-m .grw-slider-header {
        -ms-flex: 0 0 25%!important;
        flex: 0 0 25%!important;
        max-width: 25%!important
    }

    .rplg .grw-row-m .grw-slider-header+.grw-slider-content {
        -ms-flex: 0 0 75%!important;
        flex: 0 0 75%!important;
        max-width: 75%!important
    }

    .rplg .grw-row-m .grw-slider-review {
        -ms-flex: 0 0 33.333333%!important;
        flex: 0 0 33.333333%!important;
        max-width: 33.333333%!important
    }

    .rplg .grw-row-l .grw-slider-header {
        -ms-flex: 0 0 20%!important;
        flex: 0 0 20%!important;
        max-width: 20%!important
    }

    .rplg .grw-row-l .grw-slider-header+.grw-slider-content {
        -ms-flex: 0 0 80%!important;
        flex: 0 0 80%!important;
        max-width: 80%!important
    }

    .rplg .grw-row-l .grw-slider-review {
        -ms-flex: 0 0 25%!important;
        flex: 0 0 25%!important;
        max-width: 25%!important
    }

    .rplg .grw-row-xl .grw-slider-header {
        -ms-flex: 0 0 16.666666%!important;
        flex: 0 0 16.666666%!important;
        max-width: 16.666666%!important
    }

    .rplg .grw-row-xl .grw-slider-header+.grw-slider-content {
        -ms-flex: 0 0 83.333333%!important;
        flex: 0 0 83.333333%!important;
        max-width: 83.333333%!important
    }

    .rplg .grw-row-xl .grw-slider-review {
        -ms-flex: 0 0 20%!important;
        flex: 0 0 20%!important;
        max-width: 20%!important
    }

    .rplg .grw-slider .grw-slider-content {
        position: relative!important;
        min-width: 0!important
    }

    .rplg .grw-slider .grw-slider-content-inner {
        position: relative!important
    }

    .rplg .grw-slider .grw-slider-header-inner,.rplg .grw-slider .grw-slider-review-inner {
        position: relative!important;
        margin: 0 10px!important;
        padding: 15px!important;
        width: 100%!important
    }

    .rplg .grw-slider:not(.wp-dark) .grw-slider-review-inner.grw-slider-review-border {
        background: #fafafa!important;
        border-radius: 4px!important;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24)!important
    }

    .rplg .grw-slider .grw-slider-review-inner>svg {
        position: absolute!important;
        top: 10px!important;
        right: 10px!important;
        width: 18px!important;
        height: 18px!important
    }

    .rplg .grw-slider .grw-slider-reviews {
        display: flex!important;
        display: -ms-flexbox!important;
        overflow: hidden!important;
        overflow-x: scroll!important;
        margin: 0 20px!important;
        padding: 10px 0 15px!important;
        flex-wrap: nowrap!important;
        -ms-flex-wrap: nowrap!important;
        scroll-snap-type: x mandatory!important;
        scroll-behavior: smooth!important;
        -webkit-overflow-scrolling: touch!important;
        scrollbar-width: none
    }

    .rplg .grw-slider .grw-slider-reviews::-webkit-scrollbar {
        display: none!important
    }

    .rplg .grw-slider .grw-slider-review {
        display: flex!important;
        position: relative!important;
        justify-content: center!important;
        align-items: center!important;
        flex-shrink: 0!important;
        scroll-snap-align: start!important;
        transform-origin: center center!important;
        transform: scale(1)!important;
        transition: transform .5s!important
    }

    .rplg .grw-slider .grw-slider-controls {
        position: absolute!important;
        top: 50%!important;
        width: 100%!important
    }

    .rplg .grw-slider .grw-slider-btns {
        position: absolute!important;
        color: #ccc!important;
        height: 28px!important;
        width: 28px!important;
        font-size: 45px!important;
        line-height: 22px!important;
        text-align: center!important;
        cursor: pointer!important;
        border-radius: 50%!important;
        user-select: none!important;
        transition: all .2s ease-in-out!important
    }

    .rplg .grw-slider .grw-slider-btns:hover {
        color: #999!important
    }

    .rplg .grw-slider .grw-slider-btns.grw-slider-prev {
        left: 0!important;
        margin-left: -3px!important
    }

    .rplg .grw-slider .grw-slider-btns.grw-slider-next {
        right: 0!important;
        margin-right: -3px!important
    }

    .rplg .grw-slider .grw-slider-dots {
        position: absolute!important;
        left: 50%!important;
        transform: translate(-50%,0)!important;
        text-align: center!important
    }

    .rplg .grw-slider .grw-slider-dot.active,.rplg .grw-slider .grw-slider-dot:hover {
        opacity: 1!important
    }

    .rplg .grw-slider .grw-slider-dot {
        display: inline-block!important;
        width: 10px!important;
        height: 10px!important;
        margin: 3px!important;
        background: #ccc!important;
        border-radius: 20px!important;
        cursor: pointer!important;
        opacity: .4!important;
        transition: all .2s ease-in-out!important
    }

    .rplg .grw-slider .rplg-row .rplg-row-right {
        width: 1px!important
    }

    .rplg .grw-slider .rplg-box-content {
        height: 100px!important;
        overflow-y: auto!important
    }

    .rplg .grw-slider .rplg-box-content::-webkit-scrollbar {
        width: 4px!important
    }

    .rplg .grw-slider .rplg-box-content::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3)!important;
        -webkit-border-radius: 4px!important;
        border-radius: 4px!important
    }

    .rplg .grw-slider .rplg-box-content::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px!important;
        border-radius: 10px!important;
        background: #ccc!important;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.5)!important
    }

    .rplg .grw-slider .rplg-box-content::-webkit-scrollbar-thumb:window-inactive {
        background: #ccc!important
    }

    .rplg .grw-slider .wp-google-wr {
        margin: 15px auto 0 -15px!important
    }

    .rplg .grw-slider .wp-google-wr a {
        color: #fff!important;
        padding: 6px 15px 10px!important;
        border-radius: 27px!important;
        background: #427fed!important;
        white-space: nowrap!important;
        text-shadow: 1px 1px 0 #888!important;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24)!important;
        user-select: none!important;
        transition: all .2s ease-in-out!important;
        text-decoration: none
    }

    .rplg .grw-slider .wp-google-wr a:hover {
        background: #1f67e7!important
    }

    .rplg .grw-slider .wp-google-wr svg {
        display: inline-block;
        width: 20px;
        height: 20px;
        padding: 1px;
        background: #fff;
        margin: 0 0 0 4px;
        border-radius: 50%;
        vertical-align: middle
    }

    .rplg .grw-slider .wp-google-wr span[data-logo=facebook] svg {
        background: #3c5b9b
    }

    .rplg .grw-slider-header .rplg-review-badge {
        top: auto!important;
        bottom: -10px!important;
        right: 10px!important
    }

    .rplg .grw-slider-header .rplg-row-right {
        overflow: visible!important
    }

    r-p {
        display: block;
        width: 100%;
        overflow: hidden;
        padding-bottom: 20px;
        text-align: left;
        direction: ltr;
        box-sizing: border-box
    }

    r-p *,r-p *:before,r-p *:after {
        box-sizing: inherit
    }

    r-p rp-h {
        display: none
    }

    r-p rp-s {
        display: inline
    }

    r-p rp-readmore {
        display: block;
        color: #136aaf;
        font-size: inherit;
        cursor: pointer;
        text-decoration: none
    }

    r-p rp-slider {
        display: flex;
        display: -ms-flexbox;
        flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        align-items: baseline;
        -ms-flex-align: baseline
    }

    r-p rp-stars svg {
        display: inline-block;
        width: 20px;
        height: 20px;
        margin: 0 4px 0 0
    }

    r-p rp-stars[data-info*=yelp] svg {
        padding: 3px;
        border-radius: 3px
    }

    r-p rp-stars[data-info*="5,yelp"] svg {
        background: #fb433c
    }

    r-p rp-stars[data-info*="4,yelp"] svg {
        background: #ff643d
    }

    r-p rp-stars[data-info*="4.5,yelp"] svg:nth-child(5) {
        background: linear-gradient(90deg,#ff643d 50%,#bbbac0 50%)
    }

    r-p rp-stars[data-info*="3,yelp"] svg,r-p rp-stars[data-info*="3.5,yelp"] svg {
        background: #ff8742
    }

    r-p rp-stars[data-info*="3.5,yelp"] svg:nth-child(5) {
        background: #bbbac0
    }

    r-p rp-stars[data-info*="3.5,yelp"] svg:nth-child(4) {
        background: linear-gradient(90deg,#ff8742 50%,#bbbac0 50%)
    }

    r-p rp-stars[data-info*="4,yelp"] svg:nth-child(5),r-p rp-stars[data-info*="3,yelp"] svg:nth-child(5),r-p rp-stars[data-info*="3,yelp"] svg:nth-child(4),r-p rp-stars[data-info*="2,yelp"] svg,r-p rp-stars[data-info*="2.5,yelp"] svg,r-p rp-stars[data-info*="1,yelp"] svg,r-p rp-stars[data-info*="1.5,yelp"] svg {
        background: #bbbac0
    }

    r-p rp-stars[data-info*="2,yelp"] svg:nth-child(1),r-p rp-stars[data-info*="2,yelp"] svg:nth-child(2),r-p rp-stars[data-info*="2.5,yelp"] svg:nth-child(1),r-p rp-stars[data-info*="2.5,yelp"] svg:nth-child(2) {
        background: #ffad48
    }

    r-p rp-stars[data-info*="2.5,yelp"] svg:nth-child(3) {
        background: linear-gradient(90deg,#ffad48 50%,#bbbac0 50%)
    }

    r-p rp-stars[data-info*="1,yelp"] svg:nth-child(1),r-p rp-stars[data-info*="1.5,yelp"] svg:nth-child(1) {
        background: #ffcc4b
    }

    r-p rp-stars[data-info*="1.5,yelp"] svg:nth-child(2) {
        background: linear-gradient(90deg,#ffcc4b 50%,#bbbac0 50%)
    }

    r-p rp-logo svg {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: 0 0;
        border-radius: 50%
    }

    r-p rp-logo[data-provider=facebook] svg {
        padding: 2px;
        background-color: #3c5b9b
    }

    r-p [data-color=dark] rp-review-time,r-p [data-color=dark] rp-header rp-based {
        color: #ccc
    }

    r-p [data-color=dark] {
        color: #eee
    }

    r-p rp-slider.rp-col-xs {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    r-p rp-slider.rp-col-xs rp-header,r-p rp-slider.rp-col-xs rp-content,r-p rp-slider.rp-col-xs rp-review,r-p rp-slider.rp-col-x rp-header+rp-content rp-review {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    r-p rp-slider.rp-col-xl rp-header+rp-content {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    r-p rp-slider.rp-col-l rp-header+rp-content {
        -ms-flex: 0 0 80%;
        flex: 0 0 80%;
        max-width: 80%
    }

    r-p rp-slider.rp-col-m rp-header+rp-content {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    r-p rp-slider.rp-col-s rp-header+rp-content {
        -ms-flex: 0 0 66.666666%;
        flex: 0 0 66.666666%;
        max-width: 66.666666%
    }

    r-p rp-slider.rp-col-x rp-header,r-p rp-slider.rp-col-x rp-header+rp-content,r-p rp-slider.rp-col-x rp-review,r-p rp-slider.rp-col-s rp-header+rp-content rp-review {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    r-p rp-slider.rp-col-s rp-header,r-p rp-slider.rp-col-s rp-review,r-p rp-slider.rp-col-m rp-header+rp-content rp-review {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    r-p rp-slider.rp-col-m rp-header,r-p rp-slider.rp-col-m rp-review,r-p rp-slider.rp-col-l rp-review {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    r-p rp-slider.rp-col-l rp-header,r-p rp-slider.rp-col-xl rp-review {
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%
    }

    r-p rp-slider.rp-col-xl rp-header {
        -ms-flex: 0 0 16.666666%;
        flex: 0 0 16.666666%;
        max-width: 16.666666%
    }

    r-p rp-slider[data-col="1"] rp-review {
        --col: 1
    }

    r-p rp-slider[data-col="2"] rp-review {
        --col: 2
    }

    r-p rp-slider[data-col="3"] rp-review {
        --col: 3
    }

    r-p rp-slider[data-col="4"] rp-review {
        --col: 4
    }

    r-p rp-slider[data-col="5"] rp-review {
        --col: 5
    }

    r-p rp-slider[data-col="6"] rp-review {
        --col: 6
    }

    r-p rp-slider[data-col="7"] rp-review {
        --col: 7
    }

    r-p rp-slider[data-col="8"] rp-review {
        --col: 8
    }

    r-p rp-slider[data-col="9"] rp-review {
        --col: 9
    }

    r-p rp-slider[data-col="10"] rp-review {
        --col: 10
    }

    r-p rp-slider[data-col] rp-review {
        -ms-flex: 0 0 calc(100%/var(--col))!important;
        flex: 0 0 calc(100%/var(--col))!important;
        max-width: calc(100%/var(--col))!important
    }

    r-p rp-slider rp-header {
        margin: 0 0 10px;
        text-align: center;
        line-height: normal
    }

    r-p rp-slider rp-header rp-score {
        display: block;
        color: #fb8e28;
        font-size: 30px
    }

    r-p rp-slider rp-header rp-rating {
        font-size: 32px;
        font-weight: 600;
        margin: 0 10px 0 0
    }

    r-p rp-slider rp-header rp-stars {
        letter-spacing: 2px
    }

    r-p rp-slider rp-header rp-stars svg {
        width: 22px;
        height: 22px
    }

    r-p rp-slider rp-header rp-star {
        position: relative;
        display: inline-block
    }

    r-p rp-slider rp-header rp-scale {
        display: block;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 1px
    }

    r-p rp-slider rp-header rp-based {
        display: block;
        color: #555;
        font-size: 15px
    }

    r-p rp-slider rp-header rp-based svg {
        display: inline;
        vertical-align: middle;
        margin: -2px 4px 0
    }

    r-p rp-stars .rp-sh:after {
        position: absolute;
        top: 0;
        left: 0;
        content: '\2605';
        color: #fb8e28;
        width: 13px;
        overflow: hidden
    }

    r-p rp-slider rp-review_us {
        display: inline-block;
        margin: 15px 0 0;
        color: #fff;
        font-size: 15px;
        padding: 8px 15px;
        outline: 0;
        border-radius: 27px;
        background: #0a6cff;
        white-space: nowrap;
        text-shadow: 1px 1px 0 #888;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);
        cursor: pointer;
        user-select: none;
        text-decoration: none;
        transition: all .2s ease-in-out
    }

    r-p rp-slider rp-review_us:hover {
        color: #fff;
        background: #1f67e7;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 3px 5px rgba(0,0,0,.24)
    }

    r-p rp-slider rp-review_us:active {
        color: #fff;
        background: #0a6cff;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 0 1px rgba(0,0,0,.24)
    }

    r-p rp-slider rp-review_us svg {
        display: inline-block;
        width: 20px;
        height: 20px;
        padding: 1px;
        background: #fff;
        margin: 0 0 0 4px;
        border-radius: 50%;
        vertical-align: middle
    }

    r-p rp-slider rp-review_us span[data-logo=facebook] svg {
        background: #3c5b9b
    }

    r-p rp-slider rp-content {
        position: relative;
        min-width: 0
    }

    r-p rp-review-head {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        position: relative
    }

    r-p rp-review-img {
        margin: 0 15px 0 0
    }

    r-p rp-review-img img {
        display: block;
        width: 50px;
        height: 50px;
        padding: 0;
        border: 0;
        border-radius: 50%;
        min-width: initial;
        max-width: initial;
        object-fit: cover;
        object-position: top;
        box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24)
    }

    r-p rp-review-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        white-space: nowrap;
        width: 1px;
        line-height: normal
    }

    r-p rp-review-name,r-p rp-review-name a {
        color: #154fc1;
        font-weight: 700;
        font-size: 16px;
        overflow: hidden;
        padding-right: 15px;
        margin-bottom: 2px;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-decoration: none
    }

    r-p rp-review-name a {
        color: inherit
    }

    r-p rp-review-time {
        color: #555;
        font-size: 14px;
        white-space: nowrap
    }

    r-p rp-review rp-stars {
        display: block;
        color: #fb8e28;
        font-size: 26px;
        line-height: normal;
        margin: 15px 0 4px;
        letter-spacing: 2px
    }

    r-p rp-slider rp-header-inner,r-p rp-slider rp-review-inner {
        display: block;
        position: relative;
        margin: 0 10px;
        padding: 15px
    }

    r-p rp-slider rp-review-inner {
        border-radius: 5px;
        border-color: transparent;
        box-shadow: 0 1px 2px rgb(60 64 67/30%),0 2px 6px 2px rgb(60 64 67/15%)
    }

    r-p rp-slider rp-reviews {
        display: flex;
        display: -ms-flexbox;
        overflow: hidden;
        overflow-x: scroll;
        margin: 0 20px;
        padding: 10px 0 15px;
        flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none
    }

    r-p rp-slider rp-reviews::-webkit-scrollbar {
        display: none
    }

    r-p rp-slider rp-review {
        display: block;
        position: relative;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        scroll-snap-align: start;
        transform-origin: center center;
        transform: scale(1);
        transition: transform .5s
    }

    r-p rp-slider rp-review rp-logo {
        position: absolute;
        top: 10px;
        right: 10px
    }

    r-p rp-slider[data-rs="2"] rp-review-inner:before {
        content: "";
        position: absolute;
        bottom: -7px;
        left: 35px;
        display: block;
        width: 14px;
        height: 14px;
        border: 1px solid #ccc;
        border-color: inherit;
        border-top: 0;
        border-left: none;
        background-color: inherit;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    r-p rp-slider[data-rs="2"] rp-stars {
        margin-top: 0
    }

    r-p rp-slider[data-rs="2"] rp-review-text {
        height: 130px
    }

    r-p rp-slider[data-rs="2"] rp-review-head {
        padding: 20px 0 0 28px
    }

    r-p rp-slider rp-review-text {
        display: block;
        height: 100px;
        font-size: 17px;
        line-height: 26px;
        overflow-y: auto
    }

    r-p rp-slider rp-review-text::-webkit-scrollbar {
        width: 4px
    }

    r-p rp-slider rp-review-text::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    r-p rp-slider rp-review-text::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #ccc;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.5)
    }

    r-p rp-slider rp-review-text::-webkit-scrollbar-thumb:window-inactive {
        background: #ccc
    }

    r-p rp-slider rp-controls {
        position: absolute;
        top: 50%;
        width: 100%
    }

    r-p rp-slider rp-btn-prev,r-p rp-slider rp-btn-next {
        position: absolute;
        height: 33px;
        width: 33px;
        text-align: center;
        cursor: pointer;
        border-radius: 50%;
        user-select: none;
        transition: all .2s ease-in-out
    }

    r-p rp-slider rp-btn-prev svg path,r-p rp-slider rp-btn-next svg path {
        fill: #999
    }

    r-p rp-slider rp-btn-prev:hover svg path,r-p rp-slider rp-btn-next:hover svg path {
        fill: #555
    }

    r-p rp-slider rp-btn-prev {
        left: 0;
        margin-left: -3px
    }

    r-p rp-slider rp-btn-next {
        right: 0;
        margin-right: -3px
    }

    r-p rp-dots {
        display: block;
        text-align: center
    }

    r-p rp-dot {
        display: inline-block;
        width: 9px;
        height: 9px;
        margin: 3px;
        background: #ccc;
        border-radius: 20px;
        cursor: pointer;
        opacity: .4;
        transition: all .2s ease-in-out
    }

    r-p rp-dot:hover {
        opacity: 1
    }

    r-p rp-dot.active {
        opacity: 1;
        background: #154fc1
    }
}

@media all {
    .rplgsw-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        z-index: 1
    }

    .rplgsw-container-no-flexbox .rplgsw-slide {
        float: left
    }

    .rplgsw-container-vertical>.rplgsw-wrapper {
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        flex-direction: column
    }

    .rplgsw-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }

    .rplgsw-container-android .rplgsw-slide,.rplgsw-wrapper {
        -webkit-transform: translate3d(0,0,0);
        -moz-transform: translate3d(0,0,0);
        -o-transform: translate(0,0);
        -ms-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    .rplgsw-container-multirow>.rplgsw-wrapper {
        -webkit-box-lines: multiple;
        -moz-box-lines: multiple;
        -ms-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .rplgsw-container-free-mode>.rplgsw-wrapper {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        margin: 0 auto
    }

    .rplgsw-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative
    }

    .rplgsw-container-autoheight,.rplgsw-container-autoheight .rplgsw-slide {
        height: auto
    }

    .rplgsw-container-autoheight .rplgsw-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        -webkit-transition-property: -webkit-transform,height;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform,height
    }

    .rplgsw-container .rplgsw-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000
    }

    .rplgsw-wp8-horizontal {
        -ms-touch-action: pan-y;
        touch-action: pan-y
    }

    .rplgsw-wp8-vertical {
        -ms-touch-action: pan-x;
        touch-action: pan-x
    }

    .rplgsw-button-next,.rplgsw-button-prev {
        position: absolute;
        top: 50%;
        width: 27px;
        height: 44px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        -moz-background-size: 27px 44px;
        -webkit-background-size: 27px 44px;
        background-size: 27px 44px;
        background-position: center;
        background-repeat: no-repeat
    }

    .rplgsw-button-next.rplgsw-button-disabled,.rplgsw-button-prev.rplgsw-button-disabled {
        opacity: .35;
        cursor: auto;
        pointer-events: none
    }

    .rplgsw-button-prev,.rplgsw-container-rtl .rplgsw-button-next {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTAsMjJMMjIsMGwyLjEsMi4xTDQuMiwyMmwxOS45LDE5LjlMMjIsNDRMMCwyMkwwLDIyTDAsMjJ6JyBmaWxsPScjMDA3YWZmJy8+PC9zdmc+);
        left: 10px;
        right: auto
    }

    .rplgsw-button-prev.rplgsw-button-black,.rplgsw-container-rtl .rplgsw-button-next.rplgsw-button-black {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTAsMjJMMjIsMGwyLjEsMi4xTDQuMiwyMmwxOS45LDE5LjlMMjIsNDRMMCwyMkwwLDIyTDAsMjJ6JyBmaWxsPScjMDAwMDAwJy8+PC9zdmc+)
    }

    .rplgsw-button-prev.rplgsw-button-white,.rplgsw-container-rtl .rplgsw-button-next.rplgsw-button-white {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTAsMjJMMjIsMGwyLjEsMi4xTDQuMiwyMmwxOS45LDE5LjlMMjIsNDRMMCwyMkwwLDIyTDAsMjJ6JyBmaWxsPScjZmZmZmZmJy8+PC9zdmc+)
    }

    .rplgsw-button-next,.rplgsw-container-rtl .rplgsw-button-prev {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTI3LDIyTDI3LDIyTDUsNDRsLTIuMS0yLjFMMjIuOCwyMkwyLjksMi4xTDUsMEwyNywyMkwyNywyMnonIGZpbGw9JyMwMDdhZmYnLz48L3N2Zz4=);
        right: 10px;
        left: auto
    }

    .rplgsw-button-next.rplgsw-button-black,.rplgsw-container-rtl .rplgsw-button-prev.rplgsw-button-black {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTI3LDIyTDI3LDIyTDUsNDRsLTIuMS0yLjFMMjIuOCwyMkwyLjksMi4xTDUsMEwyNywyMkwyNywyMnonIGZpbGw9JyMwMDAwMDAnLz48L3N2Zz4=)
    }

    .rplgsw-button-next.rplgsw-button-white,.rplgsw-container-rtl .rplgsw-button-prev.rplgsw-button-white {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyNyA0NCc+PHBhdGggZD0nTTI3LDIyTDI3LDIyTDUsNDRsLTIuMS0yLjFMMjIuOCwyMkwyLjksMi4xTDUsMEwyNywyMkwyNywyMnonIGZpbGw9JyNmZmZmZmYnLz48L3N2Zz4=)
    }

    .rplgsw-pagination {
        position: absolute;
        text-align: center;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        -webkit-transform: translate3d(0,0,0);
        -ms-transform: translate3d(0,0,0);
        -o-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        z-index: 10
    }

    .rplgsw-pagination.rplgsw-pagination-hidden {
        opacity: 0
    }

    .rplgsw-container-horizontal>.rplgsw-pagination-bullets,.rplgsw-pagination-custom,.rplgsw-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%
    }

    .rplgsw-pagination-bullet {
        width: 8px;
        height: 8px;
        display: inline-block;
        border-radius: 100%;
        background: #000;
        opacity: .2
    }

    button.rplgsw-pagination-bullet {
        border: none;
        margin: 0;
        padding: 0;
        box-shadow: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -webkit-appearance: none;
        appearance: none
    }

    .rplgsw-pagination-clickable .rplgsw-pagination-bullet {
        cursor: pointer
    }

    .rplgsw-pagination-white .rplgsw-pagination-bullet {
        background: #fff
    }

    .rplgsw-pagination-bullet-active {
        opacity: 1;
        background: #007aff
    }

    .rplgsw-pagination-white .rplgsw-pagination-bullet-active {
        background: #fff
    }

    .rplgsw-pagination-black .rplgsw-pagination-bullet-active {
        background: #000
    }

    .rplgsw-container-vertical>.rplgsw-pagination-bullets {
        right: 10px;
        top: 50%;
        -webkit-transform: translate3d(0,-50%,0);
        -moz-transform: translate3d(0,-50%,0);
        -o-transform: translate(0,-50%);
        -ms-transform: translate3d(0,-50%,0);
        transform: translate3d(0,-50%,0)
    }

    .rplgsw-container-vertical>.rplgsw-pagination-bullets .rplgsw-pagination-bullet {
        margin: 5px 0;
        display: block
    }

    .rplgsw-container-horizontal>.rplgsw-pagination-bullets .rplgsw-pagination-bullet {
        margin: 0 5px
    }

    .rplgsw-pagination-progress {
        background: rgba(0,0,0,.25);
        position: absolute
    }

    .rplgsw-pagination-progress .rplgsw-pagination-progressbar {
        background: #007aff;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left top;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        transform-origin: left top
    }

    .rplgsw-container-rtl .rplgsw-pagination-progress .rplgsw-pagination-progressbar {
        -webkit-transform-origin: right top;
        -moz-transform-origin: right top;
        -ms-transform-origin: right top;
        -o-transform-origin: right top;
        transform-origin: right top
    }

    .rplgsw-container-horizontal>.rplgsw-pagination-progress {
        width: 100%;
        height: 4px;
        left: 0;
        top: 0
    }

    .rplgsw-container-vertical>.rplgsw-pagination-progress {
        width: 4px;
        height: 100%;
        left: 0;
        top: 0
    }

    .rplgsw-pagination-progress.rplgsw-pagination-white {
        background: rgba(255,255,255,.5)
    }

    .rplgsw-pagination-progress.rplgsw-pagination-white .rplgsw-pagination-progressbar {
        background: #fff
    }

    .rplgsw-pagination-progress.rplgsw-pagination-black .rplgsw-pagination-progressbar {
        background: #000
    }

    .rplgsw-container-3d {
        -webkit-perspective: 1200px;
        -moz-perspective: 1200px;
        -o-perspective: 1200px;
        perspective: 1200px
    }

    .rplgsw-container-3d .rplgsw-cube-shadow,.rplgsw-container-3d .rplgsw-slide,.rplgsw-container-3d .rplgsw-slide-shadow-bottom,.rplgsw-container-3d .rplgsw-slide-shadow-left,.rplgsw-container-3d .rplgsw-slide-shadow-right,.rplgsw-container-3d .rplgsw-slide-shadow-top,.rplgsw-container-3d .rplgsw-wrapper {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d
    }

    .rplgsw-container-3d .rplgsw-slide-shadow-bottom,.rplgsw-container-3d .rplgsw-slide-shadow-left,.rplgsw-container-3d .rplgsw-slide-shadow-right,.rplgsw-container-3d .rplgsw-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10
    }

    .rplgsw-container-3d .rplgsw-slide-shadow-left {
        background-image: -webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
        background-image: -webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -moz-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))
    }

    .rplgsw-container-3d .rplgsw-slide-shadow-right {
        background-image: -webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
        background-image: -webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))
    }

    .rplgsw-container-3d .rplgsw-slide-shadow-top {
        background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
        background-image: -webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -moz-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))
    }

    .rplgsw-container-3d .rplgsw-slide-shadow-bottom {
        background-image: -webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
        background-image: -webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -moz-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: -o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));
        background-image: linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))
    }

    .rplgsw-container-coverflow .rplgsw-wrapper,.rplgsw-container-flip .rplgsw-wrapper {
        -ms-perspective: 1200px
    }

    .rplgsw-container-cube,.rplgsw-container-flip {
        overflow: visible
    }

    .rplgsw-container-cube .rplgsw-slide,.rplgsw-container-flip .rplgsw-slide {
        pointer-events: none;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 1
    }

    .rplgsw-container-cube .rplgsw-slide .rplgsw-slide,.rplgsw-container-flip .rplgsw-slide .rplgsw-slide {
        pointer-events: none
    }

    .rplgsw-container-cube .rplgsw-slide-active,.rplgsw-container-cube .rplgsw-slide-active .rplgsw-slide-active,.rplgsw-container-flip .rplgsw-slide-active,.rplgsw-container-flip .rplgsw-slide-active .rplgsw-slide-active {
        pointer-events: auto
    }

    .rplgsw-container-cube .rplgsw-slide-shadow-bottom,.rplgsw-container-cube .rplgsw-slide-shadow-left,.rplgsw-container-cube .rplgsw-slide-shadow-right,.rplgsw-container-cube .rplgsw-slide-shadow-top,.rplgsw-container-flip .rplgsw-slide-shadow-bottom,.rplgsw-container-flip .rplgsw-slide-shadow-left,.rplgsw-container-flip .rplgsw-slide-shadow-right,.rplgsw-container-flip .rplgsw-slide-shadow-top {
        z-index: 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .rplgsw-container-cube .rplgsw-slide {
        visibility: hidden;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        width: 100%;
        height: 100%
    }

    .rplgsw-container-cube.rplgsw-container-rtl .rplgsw-slide {
        -webkit-transform-origin: 100% 0;
        -moz-transform-origin: 100% 0;
        -ms-transform-origin: 100% 0;
        transform-origin: 100% 0
    }

    .rplgsw-container-cube .rplgsw-slide-active,.rplgsw-container-cube .rplgsw-slide-next,.rplgsw-container-cube .rplgsw-slide-next+.rplgsw-slide,.rplgsw-container-cube .rplgsw-slide-prev {
        pointer-events: auto;
        visibility: visible
    }

    .rplgsw-container-cube .rplgsw-cube-shadow {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: .6;
        -webkit-filter: blur(50px);
        filter: blur(50px);
        z-index: 0
    }

    .rplgsw-container-fade.rplgsw-container-free-mode .rplgsw-slide {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out
    }

    .rplgsw-container-fade .rplgsw-slide {
        pointer-events: none;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity
    }

    .rplgsw-container-fade .rplgsw-slide .rplgsw-slide {
        pointer-events: none
    }

    .rplgsw-container-fade .rplgsw-slide-active,.rplgsw-container-fade .rplgsw-slide-active .rplgsw-slide-active {
        pointer-events: auto
    }

    .rplgsw-zoom-container {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        text-align: center
    }

    .rplgsw-zoom-container>canvas,.rplgsw-zoom-container>img,.rplgsw-zoom-container>svg {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain
    }

    .rplgsw-scrollbar {
        border-radius: 10px;
        position: relative;
        -ms-touch-action: none;
        background: rgba(0,0,0,.1)
    }

    .rplgsw-container-horizontal>.rplgsw-scrollbar {
        position: absolute;
        left: 1%;
        bottom: 3px;
        z-index: 50;
        height: 5px;
        width: 98%
    }

    .rplgsw-container-vertical>.rplgsw-scrollbar {
        position: absolute;
        right: 3px;
        top: 1%;
        z-index: 50;
        width: 5px;
        height: 98%
    }

    .rplgsw-scrollbar-drag {
        height: 100%;
        width: 100%;
        position: relative;
        background: rgba(0,0,0,.5);
        border-radius: 10px;
        left: 0;
        top: 0
    }

    .rplgsw-scrollbar-cursor-drag {
        cursor: move
    }

    .rplgsw-lazy-preloader {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -21px;
        margin-top: -21px;
        z-index: 10;
        -webkit-transform-origin: 50%;
        -moz-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-animation: rplgsw-preloader-spin 1s steps(12,end) infinite;
        -moz-animation: rplgsw-preloader-spin 1s steps(12,end) infinite;
        animation: rplgsw-preloader-spin 1s steps(12,end) infinite
    }

    .rplgsw-lazy-preloader:after {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTIwIDEyMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB4bWxuczp4bGluaz0naHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayc+PGRlZnM+PGxpbmUgaWQ9J2wnIHgxPSc2MCcgeDI9JzYwJyB5MT0nNycgeTI9JzI3JyBzdHJva2U9JyM2YzZjNmMnIHN0cm9rZS13aWR0aD0nMTEnIHN0cm9rZS1saW5lY2FwPSdyb3VuZCcvPjwvZGVmcz48Zz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDMwIDYwLDYwKScvPjx1c2UgeGxpbms6aHJlZj0nI2wnIG9wYWNpdHk9Jy4yNycgdHJhbnNmb3JtPSdyb3RhdGUoNjAgNjAsNjApJy8+PHVzZSB4bGluazpocmVmPScjbCcgb3BhY2l0eT0nLjI3JyB0cmFuc2Zvcm09J3JvdGF0ZSg5MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDEyMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDE1MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMzcnIHRyYW5zZm9ybT0ncm90YXRlKDE4MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNDYnIHRyYW5zZm9ybT0ncm90YXRlKDIxMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNTYnIHRyYW5zZm9ybT0ncm90YXRlKDI0MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNjYnIHRyYW5zZm9ybT0ncm90YXRlKDI3MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNzUnIHRyYW5zZm9ybT0ncm90YXRlKDMwMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuODUnIHRyYW5zZm9ybT0ncm90YXRlKDMzMCA2MCw2MCknLz48L2c+PC9zdmc+);
        background-position: 50%;
        -webkit-background-size: 100%;
        background-size: 100%;
        background-repeat: no-repeat
    }

    .rplgsw-lazy-preloader-white:after {
        background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTIwIDEyMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB4bWxuczp4bGluaz0naHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayc+PGRlZnM+PGxpbmUgaWQ9J2wnIHgxPSc2MCcgeDI9JzYwJyB5MT0nNycgeTI9JzI3JyBzdHJva2U9JyNmZmYnIHN0cm9rZS13aWR0aD0nMTEnIHN0cm9rZS1saW5lY2FwPSdyb3VuZCcvPjwvZGVmcz48Zz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDMwIDYwLDYwKScvPjx1c2UgeGxpbms6aHJlZj0nI2wnIG9wYWNpdHk9Jy4yNycgdHJhbnNmb3JtPSdyb3RhdGUoNjAgNjAsNjApJy8+PHVzZSB4bGluazpocmVmPScjbCcgb3BhY2l0eT0nLjI3JyB0cmFuc2Zvcm09J3JvdGF0ZSg5MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDEyMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMjcnIHRyYW5zZm9ybT0ncm90YXRlKDE1MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuMzcnIHRyYW5zZm9ybT0ncm90YXRlKDE4MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNDYnIHRyYW5zZm9ybT0ncm90YXRlKDIxMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNTYnIHRyYW5zZm9ybT0ncm90YXRlKDI0MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNjYnIHRyYW5zZm9ybT0ncm90YXRlKDI3MCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuNzUnIHRyYW5zZm9ybT0ncm90YXRlKDMwMCA2MCw2MCknLz48dXNlIHhsaW5rOmhyZWY9JyNsJyBvcGFjaXR5PScuODUnIHRyYW5zZm9ybT0ncm90YXRlKDMzMCA2MCw2MCknLz48L2c+PC9zdmc+)
    }

    @-webkit-keyframes rplgsw-preloader-spin {
        100% {
            -webkit-transform: rotate(360deg)
        }
    }

    @keyframes rplgsw-preloader-spin {
        100% {
            transform: rotate(360deg)
        }
    }
}

@media all {
    .lwptoc {
        margin: 32px 0
    }

    .lwptoc:first-child {
        margin-top: 16px
    }

    .lwptoc_i {
        padding: 14px 18px 18px;
        text-align: left
    }

    .lwptoc_header {
        margin-bottom: 6px
    }

    .rtl .lwptoc_header {
        text-align: right
    }

    .lwptoc_toggle {
        white-space: nowrap;
        margin-left: 4px;
        font-size: 80%
    }

    .rtl .lwptoc_toggle {
        margin-left: 0;
        margin-right: 4px
    }

    .lwptoc_toggle:before {
        content: '['
    }

    .lwptoc_toggle:after {
        content: ']'
    }

    .lwptoc_toggle_label {
        margin: 0 1px
    }

    .lwptoc_item {
        margin-top: 2px
    }

    .rtl .lwptoc_item {
        text-align: right
    }

    li.lwptoc_item {
        margin: 2px 0 0!important;
        padding: 0!important;
        list-style: none!important
    }

    .lwptoc_item:first-child {
        margin-top: 0
    }

    li.lwptoc_item:first-child {
        margin-top: 0!important
    }

    .lwptoc_item_number {
        margin-right: 2px
    }

    .rtl .lwptoc_item_number {
        margin-right: 0;
        margin-left: 2px
    }

    .lwptoc_itemWrap .lwptoc_itemWrap {
        margin: 2px 0 0 14px
    }

    .rtl .lwptoc_itemWrap .lwptoc_itemWrap {
        margin-left: 0;
        margin-right: 14px
    }

    ol.lwptoc_itemWrap,ul.lwptoc_itemWrap {
        margin: 0!important;
        padding: 0!important;
        list-style: none!important
    }

    ol.lwptoc_itemWrap ol.lwptoc_itemWrap,ol.lwptoc_itemWrap ul.lwptoc_itemWrap,ul.lwptoc_itemWrap ol.lwptoc_itemWrap,ul.lwptoc_itemWrap ul.lwptoc_itemWrap {
        margin: 2px 0 0 14px!important
    }

    .rtl ol.lwptoc_itemWrap ol.lwptoc_itemWrap,.rtl ol.lwptoc_itemWrap ul.lwptoc_itemWrap,.rtl ul.lwptoc_itemWrap ol.lwptoc_itemWrap,.rtl ul.lwptoc_itemWrap ul.lwptoc_itemWrap {
        margin-left: 0!important;
        margin-right: 14px!important
    }

    .lwptoc-autoWidth .lwptoc_i {
        display: inline-block
    }

    .lwptoc-left {
        float: left;
        margin-top: 0;
        margin-right: 32px
    }

    .lwptoc-right {
        float: right;
        margin-top: 0;
        margin-left: 32px
    }

    .lwptoc-rightwithoutflow {
        text-align: right
    }

    .lwptoc-rightwithoutflow .lwptoc_i {
        display: inline-block
    }

    .lwptoc-center {
        text-align: center
    }

    .lwptoc-center .lwptoc_i {
        margin-left: auto;
        margin-right: auto
    }

    .lwptoc-baseItems .lwptoc_items {
        font-size: 90%
    }

    .lwptoc-notInherit .lwptoc_i div a {
        box-shadow: none!important;
        border: none!important;
        text-decoration: none!important
    }

    .lwptoc-notInherit .lwptoc_i div a:active,.lwptoc-notInherit .lwptoc_i div a:focus,.lwptoc-notInherit .lwptoc_i div a:hover {
        box-shadow: none!important;
        border: none!important;
        text-decoration: none!important
    }

    .lwptoc-notInherit .lwptoc_i div a:hover {
        border-bottom: 1px dotted!important
    }

    .lwptoc-light .lwptoc_i {
        color: #333;
        background: #fafafa
    }

    .lwptoc-light .lwptoc_i a {
        color: #3175e4
    }

    .lwptoc-light .lwptoc_i a:active,.lwptoc-light .lwptoc_i a:focus,.lwptoc-light .lwptoc_i a:hover {
        color: #3175e4;
        border-color: #3175e4
    }

    .lwptoc-light .lwptoc_items a:visited {
        color: #000394
    }

    .lwptoc-dark .lwptoc_i {
        color: #d3d5d8;
        background: #2b2b2b
    }

    .lwptoc-dark .lwptoc_i a {
        color: #96c6ff
    }

    .lwptoc-dark .lwptoc_i a:active,.lwptoc-dark .lwptoc_i a:focus,.lwptoc-dark .lwptoc_i a:hover {
        color: #96c6ff;
        border-color: #71b2ff
    }

    .lwptoc-dark .lwptoc_items a:visited {
        color: #53a1ff
    }

    .lwptoc-white .lwptoc_i {
        color: #333;
        background: #fff
    }

    .lwptoc-white .lwptoc_i a {
        color: #3175e4
    }

    .lwptoc-white .lwptoc_i a:active,.lwptoc-white .lwptoc_i a:focus,.lwptoc-white .lwptoc_i a:hover {
        color: #3175e4;
        border-color: #3175e4
    }

    .lwptoc-white .lwptoc_items a:visited {
        color: #000394
    }

    .lwptoc-transparent .lwptoc_i {
        border: 1px solid #eee
    }
}

</style>

</head>
<body>
<div class="booking-form form-booking"><div class="gf_browser_chrome gform_wrapper gravity-theme gform-theme--no-framework" data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_1" style="" data-spai-bg-prepared="1"><div class="gform_heading"><p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" indicates required fields</p></div>

<form method="post" enctype="multipart/form-data" id="gform_1" action="sender.php" data-formid="1">
    <div class="gform-body gform_body">
        <div id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
            <div id="field_1_4" class="gfield gfield--type-text gfield--width-third gfield_left gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_1_4">
                <label class="gfield_label gform-field-label" for="input_1_4">Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                <div class="ginput_container ginput_container_text">
                    <input name="input_4" id="input_1_4" type="text" value="" class="large" placeholder="Name" aria-required="true" aria-invalid="false">
                </div>
            </div>
            <div id="field_1_5" class="gfield gfield--type-select gfield--width-third gfield_center gfield-incrementer gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_1_5">
                <label class="gfield_label gform-field-label" for="input_1_5">Bedroom<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                <div class="ginput_container ginput_container_select">
                    <select name="input_5" id="input_1_5" class="large gfield_select" aria-required="true" aria-invalid="false">
                        <option value="1 Bedroom" selected="selected">1 Bedroom</option><option value="2 Bedrooms">2 Bedrooms</option><option value="3 Bedrooms">3 Bedrooms</option><option value="4 Bedrooms">4 Bedrooms</option><option value="5 Bedrooms">5 Bedrooms</option><option value="6 Bedrooms">6 Bedrooms</option>
                    </select>
                </div>
                <span class="button-increment plus-button"><svg class="icon_plus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="#CCCCCC"></path> </svg>
                </span>
                <span class="button-increment minus-button"><svg class="icon_minus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 18.6274 18.6274 24 12 24C5.37259 24 0 18.6274 0 12C0 5.37259 5.37259 0 12 0C18.6274 0 24 5.37259 24 12ZM17 11V13H7V11H17Z" fill="#CCCCCC"></path> </svg>
                </span>
            </div>
            <div id="field_1_6" class="gfield gfield--type-select gfield--width-third gfield_right gfield-incrementer gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_1_6"><label class="gfield_label gform-field-label" for="input_1_6">Bathroom<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_select">
                        <select name="input_6" id="input_1_6" class="large gfield_select" aria-required="true" aria-invalid="false">
                            <option value="1 Bathroom" selected="selected">1 Bathroom</option><option value="2 Bathrooms">2 Bathrooms</option><option value="3 Bathrooms">3 Bathrooms</option><option value="4 Bathrooms">4 Bathrooms</option><option value="5 Bathrooms">5 Bathrooms</option><option value="6 Bathrooms">6 Bathrooms</option>
                        </select></div><span class="button-increment plus-button"><svg class="icon_plus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="#CCCCCC"></path> </svg></span><span class="button-increment minus-button"><svg class="icon_minus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 18.6274 18.6274 24 12 24C5.37259 24 0 18.6274 0 12C0 5.37259 5.37259 0 12 0C18.6274 0 24 5.37259 24 12ZM17 11V13H7V11H17Z" fill="#CCCCCC"></path> </svg></span></div><div id="field_1_2" class="gfield gfield--type-email gfield--width-half booking-form-email gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_1_2"><label class="gfield_label gform-field-label" for="input_1_2">Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_email"> <input name="input_2" id="input_1_2" type="text" value="" class="large" placeholder="Email" aria-required="true" aria-invalid="false"></div></div><div id="field_1_7" class="gfield gfield--type-text gfield--width-half booking-form-number gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_1_7"><label class="gfield_label gform-field-label" for="input_1_7">Mobile<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_text"><input name="input_7" id="input_1_7" type="text" value="" class="large" placeholder="Mobile" aria-required="true" aria-invalid="false"></div></div><div id="field_1_9" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_1_9"><div class="ginput_container ginput_container_text"><input name="input_9" id="input_1_9" type="hidden" class="gform_hidden" aria-invalid="false" value="No spam"></div></div><div id="field_1_10" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_1_10"><label class="gfield_label gform-field-label" for="input_1_10">Comments</label><div class="ginput_container"><input name="input_10" id="input_1_10" type="text" value=""></div><div class="gfield_description" id="gfield_description_1_10">This field is for validation purposes and should be left unchanged.</div></div></div></div><div class="gform_footer top_label"> <input type="submit" name="submit" id="gform_submit_button_1" class="gform_button button gform-button--width-full" value="GET PRICE" data-conditional-logic="visible" data-spai-bg-prepared="1"> <input type="hidden" class="gform_hidden" name="is_submit_1" value="1"> <input type="hidden" class="gform_hidden" name="gform_submit" value="1"> <input type="hidden" class="gform_hidden" name="gform_unique_id" value=""> <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjk2NDIyODYxNjcwZmE0ZmI5ZDZiMmI4NDYzZmE4MDE3Il0="> <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0"> <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1"> <input type="hidden" name="gform_field_values" value=""></div>
</form> 


            </div>

</div>


</body>
</html>