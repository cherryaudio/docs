title: 'Hex Phaser'
body:
  -
    type: text
    text: '<h1>HEX PHASER</h1>'
  -
    type: image
    image:
      - /assets/ug_hex_phaser.jpg
    alignment: left
  -
    type: text
    text: '<p>Besides being a stupendously good name for a comic-book villain, Hex Phaser takes the standard phaser effect and adds features out the proverbial wazoo! Though it vaguely resembles a classic 70s phaser effect, its unique feature set allow endless colors and tonal variations. These include individually switchable stages and feedback insert point, as well as extensive modulation, taking it FAR beyond the standard "two-knob special" stomp box.&nbsp;</p><h2>A Little Background</h2><p>In order to get the most from phaser, let''s talk a bit about how phaser effects work. Phasers make use of a special type of filter called an "all-pass" filter. Unlike low-, high-, or band-pass filters, an all-pass filters allows all frequencies to pass through. So what good is that? Though it passes all frequencies, it alters the phase relationship of part of the audio spectrum. By itself, you wouldn''t hear any audible difference, but when combined with the dry signal, phase cancellation occurs in regions of the audio spectrum. Varying the center frequency of the all-pass filter (i.e. where the phase cancellation occurs) results in the familiar sound we know as "phasing."</p><p>If a single all-pass filter is used, the effect is rather subtle. Engineers found that stacking multiple all-pass filter stages created a deeper, more pronounced swooshing effect. This is why phaser effects are sometimes referred to as four-stage, six-stage, etc. (Most of the classic stomp box phaser effects use four stages.) Another way phasing effects are intensified is by feeding back an inverted version of the phased part of the signal (i.e. not the unaffected dry signal) back into one of the stages.&nbsp;</p><p>In a typical hardware unit, the number of stages and feedback routing are fixed and unalterable. Hex Phaser allows all six of its stages to be enabled or disabled in any combination, and also lets you select the stage where the feedback routing occurs. This allows a lot of different sounds, especially in combination with the <em>Feedback&nbsp;</em>and <em>Q Width</em>&nbsp;controls.&nbsp;&nbsp;</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p>We''ll be jumping around a little bit in order to make the most sense of the control layout.&nbsp;</p><p><strong>L(M) and R Input jacks</strong>- These are the mono or stereo audio input jacks. Though it only has one set of controls, Hex Phaser is actually a true-stereo effect "under the hood," but unlike a typical stereo effect (e.g. reverb), it''s desirable to have both channels share settings, and have their modulation cycles related to each other (see the <em>Stereo Offset </em>control section for more on this).&nbsp;</p><p><strong>Mono in/mono out - </strong>Use In L (M) and Out L (M). The<em> Stereo Offset</em> control won''t have any useful effect (it''s setting won''t matter).&nbsp;</p><p><strong>Stereo in/mono out -&nbsp;</strong>Use In L (M) and both outputs. The dry signal remains mono; the phased signal modulation is offset according to the&nbsp;<em>Stereo Offset&nbsp;</em>control setting. Hex Phaser is a great way to stereo-ize mono signals.&nbsp;</p><p><strong>Stereo in/Stereo out -&nbsp;</strong>Use both inputs and both outputs. The dry signal maintains its stereo perspective. The phased signal also retains stereo separation and modulation is offset according to the&nbsp;<em>Stereo Offset&nbsp;</em>control setting.&nbsp;</p><p><br></p><p><strong>Stages</strong>- Hex Phaser features six all-pass filter stages (hence the name). Each of these can be enabled or disabled using the numbered buttons. As a general rule, more stages = lusher phase, but there are plenty of interesting tones to be had using very few stages. Note that the center frequency for each stage is slightly different - this was done because it actually sounds a little "larger" on the whole when multiple stages are used, and has the side benefit of sounding slightly different when individual stages are used.&nbsp;</p><p><strong>Feedback knob and Feedback Path buttons</strong>- The feedback knob adjusts the amount of inverted effect-only signal that gets mixed with the existing signal. This creates a more colorful and intense effect. The <em>Feedback Path</em><strong>&nbsp;</strong>buttons let you specify which phaser stage receives the feedback signal, resulting in different tonalities.&nbsp;</p><p>Keep in mind that the signal always travels through the stages from left to right, so there are some non-tragic caveats to be aware of. In the example below, since stages 2 and 3 are disabled, <em>Feedback Path </em>"skips" stages 2 and 3 and is effectively the same as setting <em>Feedback Path</em> to stage 4.&nbsp;</p>'
  -
    type: image
    image:
      - /assets/ug_hex_phaser_fdbck_path_1.jpg
    alignment: left
  -
    type: text
    text: '<p>In the screenshot below, the feedback signal is inserted <em>after</em> the enabled phaser stages, so it wouldn''t result in any change in the phase sound (just an overall volume increase, and potentially loud, not-cool-sounding feedback mess). If the feedback path is routed after any enabled stages, the path is automatically disabled. It won''t void your warranty or anything like that, but it''s something to be aware of.&nbsp;</p>'
  -
    type: image
    image:
      - /assets/ug_hex_phaser_fdbck_path_2.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Rate</strong>- Sets the phaser speed modulation from 0.01 Hz to 7.5 Hz.</p><p><strong>Depth</strong>- Adjusts the depth of the phase modulation, i.e. how far the all-pass filters sweep back and forth.</p><p><strong>Q Width</strong>- Sets the nominal frequency spread size of the all-pass filters. This control will really noticeably alter the overall tone and character - be sure to try it when experimenting with stage and feedback settings.&nbsp;&nbsp;</p><p><strong>Stereo Offset- Though it only has one set of controls, Hex Phaser is actually a true-stereo effect "under the hood."&nbsp;</strong></p><p><strong>Feedback CV Amt jack and attenuator</strong>- CV input for externally controlling the feedback amount.</p><p><strong>L and R Output jacks</strong>- These are the module''s stereo output jacks.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Chorus module is a great sounding and flexible stereo chorus effect featuring CV control of delay time, feedback level, and wet/dry mix.'
  image: /assets/social-modules/chorus.png
fieldset: documentation
id: c84b92a9-49bc-4efd-8d7d-c287b3cd78c0
