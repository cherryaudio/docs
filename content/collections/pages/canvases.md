title: Canvases
body:
  -
    type: text
    text: '<h2>Canvases</h2><p>A canvas is a control that, in its default form, doesn’t do anything at all. It’s up to you to paint it and handle any mouse interactions that occur. Use a canvas when you want to draw something (a graph or waveform, for instance), create a custom control, or just generally do something that the module designer’s native controls aren’t capable of. Voltage Modular’s Oscilloscope module, to cite one example, uses a canvas control to draw a graph of the input signal.</p><p><strong>Java Class Name:</strong> &nbsp;VoltageCanvas</p><p>If you’re using a canvas, you’ll want to handle the canvas notifications that arrive in the Notify function. At least some of these will be important to you:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image83.png
    alignment: left
  -
    type: text
    text: '<p>Here’s a simple example of a function that clears a canvas to a solid color - you’d call this function from your <code><code>Canvas_Painting </code></code>handler (and ONLY from your <code>Canvas_Painting </code>handler):<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image57.png
    alignment: left
  -
    type: text
    text: '<p>Though the <code>setRenderingHint()</code> call isn’t necessary here, it gives us a chance to mention that if the things you’re drawing in your canvas seem aliased and pixelated, inserting the <code>setRenderingHint()</code> call listed above is likely to help.</p><p>The <strong>Graphics2D </strong>object in the above code is native to Java, rather than Cherry Audio; you can find more information about it at <a href="https://docs.oracle.com/javase/7/docs/api/java/awt/Graphics2D.html">https://docs.oracle.com/javase/7/docs/api/java/awt/Graphics2D.html</a> .</p><p>For any of the mouse-related notifications shown above, the x and y parameters to Notify() will contain the mouse’s current position relative to your canvas’s top left corner.</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular doesn’t save state for canvases. Like everything else to do with these controls, it’s a roll-your-own affair. Add your own code to save &amp; load data in GetStateInformation &amp; SetStateInformation if you need to store data with your canvas.</p>'
  -
    type: image
    image:
      - /assets/VMPG/image65.png
    alignment: left
  -
    type: text
    text: '<p><br></p><p><br></p>'
template: documentation
id: 4a880d0e-37b3-4e0e-97c9-adadcba0efff
slug: canvases
blueprint: documentation
