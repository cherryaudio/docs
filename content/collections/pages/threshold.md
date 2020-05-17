title: Threshold
body:
  -
    type: text
    text: '<h1>THRESHOLD</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_threshold.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Threshold module passes voltages received at its input jack to one of two outputs based on whether or not the signal is above or below a specified voltage level. Each output jack also has an affiliated <em>Gate Out </em>jack which generates a +5V signal any time it''s respective output is passing voltage.</p><p>There are many ways to use this module but let’s look at a few fun examples.&nbsp;&nbsp;</p><ul><li>You could patch the output of an Eight-Step Sequencer to the input of a Threshold module to send the low and high notes of a sequence to two different oscillator/envelope/amp setups. The Threshold knob could then be “played” to somewhat randomly change which notes go to which oscillator setup.&nbsp;</li><li>The two <em>Gate Out</em> jacks could be patched to the <em>Stop </em>and <em>Start </em>jacks of a sequencer to have a sequence play only during a portion of a slow envelope or LFO. This could be a fun experiment for a generative patch!</li><li>You can even get really cool results from running audio signals through the Threshold module. Try using a drum loop as the input signal and using the <em>Over Out</em> jack to modulate the pitch of an oscillator!</li></ul><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Input jack</strong>- This is the input jack for the audio or CV signal that will be tested.</p><p><strong>Threshold</strong>- Sets the voltage level, between -5V and +5V, that the input signal will be determined to be above or below. This is the setting that defines the "split point" between the two outputs.</p><p><strong>Under Out jack</strong>- Outputs any voltage received at the input jack that is below the <em>Threshold</em>.</p><p><strong>Under Gate Out jack</strong>- Outputs a +5V gate signal anytime the input voltage is below the <em>Threshold</em>.</p><p><strong>Over Out jack</strong>- Outputs any voltage received at the input jack that is above the <em>Threshold</em>.</p><p><strong>Over Gate Out jack</strong>- Outputs a +5V gate signal anytime the input voltage is above the <em>Threshold</em>.&nbsp;<br></p>'
template: documentation
seo:
  description: 'The Cherry Audio Threshold module passes voltages received at its input jack to one of two outputs based on whether or not the signal is above or below a specified voltage level.'
  image: /assets/social-modules/threshold.png
id: 4ff26a9b-cf8d-4c72-9b60-60ce95a0ef52
slug: threshold
blueprint: documentation
