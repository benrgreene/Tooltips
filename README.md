# Tooltips for WordPress

This plugin adds a shortcode allowing authors to add tooltips to their content. Using it is pretty easy:

```
[tooltip tip="this is my hot tip!" ]my content[/tooltip]
```

This will add a tooltip that appears when a user hovers over the text 'my content'.

There are a couple extra attributes you can add to the shortcode:

* **underline**: this tells the shortcode if you want it to display an underline to notify users the text is interactable (defaults to "true")
* **position**: this tells the shortcode if the tooltip should be above or beneath the content it's describing. Should be either 'top' or 'bottom' (defaults to 'top')