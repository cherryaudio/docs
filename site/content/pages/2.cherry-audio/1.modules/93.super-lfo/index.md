title: 'Super LFO'
body:
  -
    type: text
    text: '<h1>SUPER LFO</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_super-lfo.jpg
    alignment: left
  -
    type: text
    text: '<p>We named it "super" for a reason! The Cherry Audio Super LFO (low-frequency oscillator) module is jam-packed with killer features. It can be used as a standard cycling LFO or switched to "one-shot" mode for use as an envelope generator. It includes a built-in sync divider and reset input for easily syncing the LFO to a host DAW, or can be used in free-run mode with CV-controllable rate. But the real showstopper is its mindblowing custom waveshaping flexibility... with seven waveshaping parameters, a huge real-time display, and bipolar CV control for real-time manipulation, the possibilities are endless. The final word in LFO modulation!</p><h2><strong>Sync and Trigger Inputs</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-lfo-sync-trig.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Sync In jack</strong>- Accepts a 96-pulse-per-quarter-note (PPQN) sync signal for syncing the LFO to a Sync Generator or DAW. To sync the Super LFO to your host DAW, patch the <em>Sync Out</em> jack in the Transport section of the I/O Panel to this jack. When <em>Division</em> is set to <em>Free Run</em>, the sync signal is ignored.</p><p><strong>Reset jack</strong>- A 5V pulse or gate received at this jack resets the LFO waveform to the beginning of its cycle. When syncing the Super LFO to a DAW, patch the <em>Play</em> jack in the Transport section of the I/O Panel to this jack to reset the LFO’s cycle each time the play button in your DAW is pressed.</p><p><strong>Gate In jack</strong>- When in <em>One Shot Mode</em>, a 5V gate signal from a keyboard or sequencer can be used to “play” the LFO like an envelope generator. The LFO will only output while a gate signal is being sent to this jack. Therefore, if a gate signal is shorter than the LFO cycle, only a portion of the LFO waveform will be output. Typically this will be patched to the <em>Gate</em> jack in the CV Outs section of the I/O Panel or the <em>Gate Out</em> jack of a sequencer.</p><p><strong>Trig In jack</strong>- When in <em>One Shot Mode</em>, a 5V trigger, gate or pulse received at this jack will cause one full cycle of the LFO to output. Typically this will be patched to the <em>Trig</em> jack in the CV Outs section of the I/O Panel or the <em>Trig Out</em> jack of a sequencer.</p><p><strong>Mode</strong>- The Super LFO can be used in two different modes.</p><ul><li>When <em>LFO</em> is selected, the Super LFO behaves like a standard cycling LFO that is continuously outputting signal. The <em>Sync In</em> and <em>Reset</em> jacks are used in this mode and the <em>Gate In</em> and <em>Trig In</em> jacks are ignored.&nbsp;</li><li>When <em>One Shot</em> is selected, the LFO can be used as an envelope generator outputting one cycle of the LFO each time a gate or trigger is received at the <em>Gate In</em> and <em>Trig In</em> jacks.</li></ul><h3><strong>Rate</strong></h3>'
  -
    type: image
    image:
      - /assets/modules/ug_super-lfo-speed.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Division</strong>- Sets the rate of the LFO to a BPM-specific note-division when synced to an external sync signal via the <em>Sync In</em> jack. Triplet and dotted note-values can be selected by engaging their respective buttons above the dial. When set to <em>Free Run</em>, the sync signal is ignored and the <em>Rate</em> knob is used to set the LFO’s frequency.</p><p><strong>Rate</strong>- When <em>Division</em> is set to <em>Free Run</em> this knob controls the frequency, or speed, of the LFO.</p><p><strong>Rate CV In jack and attenuator</strong>- CV input and bipolar attenuator for externally controlling the rate of the LFO when <em>Division</em> is set to <em>Free Run</em>.</p><h3><strong>Waveshaping</strong></h3><p>The following seven parameters dictate the shape of the LFO waveform and can all be CV controlled with their respective CV input and bipolar attenuator. The waveshape, and any modulations of it, are displayed in real time by the waveform display.&nbsp;</p>'
  -
    type: image
    image:
      - /assets/modules/ug_super-lfo-waveshape2.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Shape</strong>- The LFO’s wave shape can morph between a pulse wave, when turned fully to the left, and a triangle wave when turned fully to the right. At any position between, the waveform is a combination of the pulse and triangle waves, both of which can be edited independently of one another by some of the following controls.<br></p><p><strong>Skew</strong>- Changes the phase of the triangle waveform independently of the pulse wave.</p><p><strong>Round</strong>- Gradually “softens” or “rounds” the shape of the LFO.</p><p><strong>Pulse Width</strong>- Adjusts the width, or “duty-cycle,” of the pulse wave independently of the triangle wave.&nbsp;</p><p><strong>Triangle Pulse Width</strong>- Adjusts the width of the increasing and decreasing portions of the triangle wave allowing it to morph between “ramp down” and “ramp up” waveforms.&nbsp;</p><p><strong>Phase</strong>- Adjusts the phase of the combined LFO waveform. Changing the phase doesn’t change the shape itself, but instead changes the “starting point.” This is especially useful when syncing the LFO to a DAW or when in <em>One Shot</em> mode.</p><p><strong>Polarity</strong>- This knob changes the polarity range of the LFO''s waveform from only negative voltages (-5V to 0V) when turned fully to the left, to bipolar (-5V to 5V) at its center position, to only positive voltages (0V to 5V) when turned fully to the right.</p><h3>Outputs</h3>'
  -
    type: image
    image:
      - /assets/modules/ug_super-lfo-outputs.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Clock Out jack</strong>- Outputs a clock signal for syncing sequencers, switches, other LFOs etc. to the Super LFO.</p><p><strong>LFO Out jack</strong>- This is the main output jack for the LFO signal.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Super LFO module can be used as a standard cycling LFO or switched to "one-shot" mode for use as an envelope generator. It includes a built-in sync divider and reset input for easily syncing the LFO to a host DAW, or can be used in free-run mode with CV-controllable rate. With seven waveshaping parameters, a huge real-time display, and bipolar CV control for real-time manipulation, the possibilities are endless.'
  image: /assets/social-modules/super-lfo.png
fieldset: documentation
id: 4a7a2e7d-cee6-4fd4-af89-3946470afcf5
