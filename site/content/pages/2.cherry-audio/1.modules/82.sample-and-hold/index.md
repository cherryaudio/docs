title: 'Sample and Hold'
body:
  -
    type: text
    text: '<h1>SAMPLE AND HOLD</h1>'
  -
    type: image
    image:
      - /assets/screenshots/ug_sample-and-hold.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Sample and Hold module is an analog-style synthesis tool that repetitively “samples” an input signal and outputs its voltage until triggered again. This module has an adjustable rate internal trigger source or can be triggered externally with a CV or audio signal.</p><p>In the image below, the smooth gray line shows a continuous input signal. Each time the module is triggered the current voltage is “sampled” and “held” until the next trigger. The red line shows the stepped output signal.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_sample-and-hold_image_2.jpg
    alignment: left
  -
    type: text
    text: '<p>White noise is often used as an input source to generate a random stepped-CV signal. Modulating the pitch of an oscillator with this will create the classic sample and hold sound often heard in sci-fi movies. Play with the rate and amount of modulation to create all sorts of bleepy-bloopy goodness! “What was that R2-D2?”</p><h2>Inputs, Outputs, and Controls</h2><p><strong>Input jack</strong>- This is the input jack for the audio or control signal that will be sampled.</p><p><strong>Ext Trigger jack</strong>- This jack can be used to externally trigger the module with a CV or audio signal. Any voltage transition from below 2.5V to 2.5V or higher will trigger the module.</p><p><strong>Trigger Source</strong>- The buttons <em>Int</em>&nbsp;and <em>Ext</em>&nbsp;select between the internal and external trigger source.</p><p><strong>Rate</strong>- Controls the rate of the internal trigger source from 0.02 Hz - 50 Hz.</p><p><strong>Output jack</strong>- Outputs the stepped sample and hold signal.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Sample and Hold module is an analog-style synthesis tool that repetitively “samples” an input signal and outputs its voltage until triggered again.'
  image: /assets/social-modules/sample-and-hold.png
fieldset: documentation
id: 6b0bcf29-1fb0-4039-925b-28006f161ec4
