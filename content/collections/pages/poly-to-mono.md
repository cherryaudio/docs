title: 'Poly To Mono'
body:
  -
    type: text
    text: '<h1>POLY TO MONO</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-to-mono.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly To Mono module receives a "poly" audio or CV signal, and outputs its channels, or "lanes," individually and as a summed mono output with level control.&nbsp;</p><h2>Let’s look at an example.</h2><p>In the image below, the Poly To Mono module is used to create a polyphonic patch that has a different filter envelope for each voice.&nbsp;</p><p>The <em>Poly Gate</em> jack in the I/O Panel is patched to a Poly To Mono module to separate the gate signals for each of the four active voices. The gate signals are then patched to four envelopes with different settings and converted back to a poly signal using the Mono To Poly module which is patched to the <em>Poly CV Mod</em> jack of the Poly Filter. By using four standard envelopes instead of a Poly Envelope Generator, the filter envelope of each voice can be shaped differently which can create interesting variations as the patch is played.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-to-mono-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>Poly In jack</strong>- Patch "poly" audio or CV signals here.</p><p><strong>CV Type</strong>- This is a handy little text box that can be used to label the module. To change the text, click in the box labeled "Click to enter label" and begin typing.</p><p><strong>Output jacks</strong>- Each of these jacks outputs one channel, or "lane," of the signal received at the <em>Poly In</em> jack. The number of active outputs depends on the <em>Number of Voices</em> setting in the I/O Panel. When the patch is set to have eight voices, for example, the LEDs for<em> Outputs 1 - 8</em> will glow red to indicate that they are active. Jacks that are not active will not output signal.</p><p><strong>Mix Level</strong>- Adjusts the level of the summed signals. When converting signals from "poly" to "mono," it’s often necessary to attenuate the output to compensate for the increase in amplitude caused by summing multiple signals.</p><p><strong>Mix Out jack</strong>- Outputs a standard "mono" signal carrying the sum of all signals received by the&nbsp;<em>Poly In</em>&nbsp;jack.</p>'
template: documentation
seo:
  description: 'The Poly To Mono module receives a "poly" audio or CV signal, and outputs its channels, or "lanes," individually and as a summed mono output with level control.'
  image: /assets/social-modules/poly-to-mono-cv.png
id: 522c49e1-4514-49cc-9469-6b9d295a6ffc
slug: poly-to-mono
blueprint: documentation
