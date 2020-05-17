title: 'Lyrinx Filter'
body:
  -
    type: text
    text: '<h1>LYRINX FILTER MAIN</h1>'
  -
    type: image
    image:
      - /assets/lyrinx_screenshot_sm.jpg
    alignment: left
  -
    type: text
    text: |
      <p>The Lyrinx Filter&nbsp; precisely replicates the unique 
      Voltage-Controlled Formant Filter of the super rare Synton Syrinx 
      synthesizer. Consisting of two "peak" (bandpass) and one lowpass filter with 
      multiple routing configurations, its excels at creating unique 
      vocal-like timbres and includes extensive CV capabilities. This lets you
       easily create funky "talking" synth sounds. Lyrinx is super easy to use
       and capable of a wide array of timbres.</p><p>As mentioned, Lyrinx includes two "peak" (bandpass) filters and one lowpass filter. The two peak filters and one lowpass filter can be arranged in a few different ways dependent on the&nbsp;<em>VCF Routing&nbsp;</em>selector knob setting, but generally speaking, the signal flows from left to right going to the peak filters first, then to the lowpass filter.</p><h2>How Bandpass and Lowpass Filters Work</h2><p>For those unfamiliar with how different filter types work, let's review how bandpass and lowpass filters affect audio signals:<br></p>
  -
    type: image
    image:
      - /assets/ug_filter_bp-1563493663.jpg
    alignment: left
  -
    type: text
    text: '<p>The original Syton Syrinx filter features two "peak" filters; as mentioned these are the same as bandpass filters. A bandpass filter is actually a combination of a lowpass filter <em>and </em>a highpass filter, configured in series (signal goes through one, then the other). The lowpass section blocks frequencies&nbsp;<em>below</em>&nbsp;the cutoff frequency setting, but allows frequencies&nbsp;<em>above</em>&nbsp;the cutoff frequency to pass through. The highpass section does the opposite: it blocks frequencies&nbsp;<em>above</em>&nbsp;the cutoff frequency setting, but allows frequencies&nbsp;<em>below</em>&nbsp;the cutoff frequency to pass through.&nbsp;</p><p>The result is that only a "slice" of frequencies below and above the cutoff frequency are allowed to pass through. However, this slice has to be relatively wide, otherwise very little sound energy would remain audible. The plot above shows how a bandpass filter affects an audio signal. (The vertical axis represents amplitude and the horizontal axis represents frequency.)</p><p><br></p>'
  -
    type: image
    image:
      - /assets/ug_filter_lp-1563494484.jpg
    alignment: left
  -
    type: text
    text: '<p>A lowpass filter allows frequencies&nbsp;<em>below</em>&nbsp;the cutoff frequency setting to pass through, but blocks frequencies&nbsp;<em>above</em>&nbsp;the cutoff frequency. The frequency plot above shows the effect of a lowpass filter on a saw wave. Notice how the high-frequency content trails off at the top of the audio spectrum.</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p>The Lyrinx Filter contains a semi-terrifying quantity of controls, but it''s actually pretty easy to use. Let''s go over their functions.</p><p><strong>In 1 and In 2 jacks</strong>- Lyrinx Filter features two individual inputs that allow a great deal of flexibility dependent upon the setting of the <em>VCF Routing&nbsp;</em>knob. In the first two positions, both inputs signals are mixed equally to one mono signal, so hey, free mixer. In the third and fourth positions, the two inputs are separately routed through the peak and lowpass filters (more on this in <em>VCF Routing</em>&nbsp;control section).&nbsp;</p><p><strong>Keyb Track CV jack</strong>- This is a CV input, intended for use with the IO Panel <em>Pitch CV&nbsp;</em>output jack (though any CV source can be plugged into it). It allows cutoff frequencies to increase as higher notes are played on a keyboard or sequencer. The idea is to allow the harmonics of a sound to remain constant as higher notes are played. The <em>Keyb Track</em>&nbsp;input works in conjunction with the <em>Kbd Trk </em>knobs, which act as CV amount attenuators/boosters.<br><br><strong>Peak 1&amp;2 Out</strong>- Individual output jack for both peak filters.<br><strong><br>LPF Out</strong>- Individual output jack for lowpass filter. Depending on which input is used and the position of the <em>VCF Routing </em>selector, this may or may not be affected by the peak filters (sometimes making it the same signal as the <em>Mix Out </em>jack).<br><br><strong>Mix Out</strong>- Output signal of all filter sections mixed together, in accordance with the <em>VCF Routing</em>&nbsp;signal flow diagram.&nbsp;<br><br><strong>Kbd Trk (Oct/V) Pk 1&amp;2 and LPF</strong>- These act as attenuators or boosters in conjunction with the the <em>Keyb Trk </em>CV input jack. <em>Pk 1&amp;2 </em>affects the cutoff frequency for both peak filters, while <em>LPF&nbsp;</em>affects the lowpass filter''s cutoff frequency.&nbsp;<br><br>At a setting of 1 (i.e. 100%), this allows a sound''s harmonics to remain constant (i.e., not become duller) as higher notes are played. The Synton Syrinx is unique in that its keyboard tracking controls go up to "2," equivalent to a setting of 200%. This allows far more contrast in filter brightness from low to to high notes than typical synth filters.&nbsp;<br></p><p><strong>VCF Routing</strong>- This selector switch allows four different routings through the bandpass and lowpass filters for different tonal colors. The front panel legend makes the signal flow easy to visualize.</p>'
  -
    type: image
    image:
      - /assets/ug_lyrinx_vcfrouting.jpg
    alignment: left
  -
    type: text
    text: '<ul><li><em><strong>Position 1</strong></em>-<strong> </strong><em>In 1</em> and <em>In 2 </em>are equally mixed, then routed through peak filters and lowpass filter in series. <em>In 1</em> or <em>In 2</em> can be used if a single signal is being processed.&nbsp;</li><li><em><strong>Position 2</strong></em>-<strong>&nbsp;</strong><em>In 1</em>&nbsp;and&nbsp;<em>In 2&nbsp;</em>are equally mixed, then the signal is multed and separately routed&nbsp; through the peak filters and the lowpass filter.&nbsp;<em>In 1</em>&nbsp;or&nbsp;<em>In 2</em>&nbsp;can be used if a single signal is being processed.</li><li><em><em><strong>Position 3</strong></em><em>-</em><strong>&nbsp;</strong></em><em>In 1</em>&nbsp;is routed through the peak filters and the lowpass filter in series. <em>In 2</em>&nbsp;is routed through the lowpass filter only.&nbsp;</li><li><em><em><strong>Position 4</strong></em><em>-</em><strong>&nbsp;</strong></em><em>In 1</em>&nbsp;is routed through the peak filters only.&nbsp;<em>In 2</em>&nbsp;is routed through the lowpass filter only.&nbsp;</li></ul><p><strong>Frequency</strong>- Sets the frequency where attenuation begins. Attenuation occurs above and below the cutoff frequency for the peak filters, and only above the cutoff frequency for the LPF (lowpass filter).&nbsp;</p><p><strong>Peak 1 CV, Peak 2 CV, LPF CV mod inputs/attenuators-&nbsp;</strong>Adjusts the depth of the cutoff frequency modulation, i.e. how much the filters sweep back and forth when a CV signal is applied. The&nbsp;attenuators allow negative or positive CV control of cutoff frequency. The center setting correlates to no modulation.&nbsp;&nbsp;</p><p><strong>Resonance Pk1, Pk2, and LPF</strong>- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter''s output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency. Be careful with the&nbsp;<em>Resonance&nbsp;</em>sliders as they can get loud at extreme settings.&nbsp;<br><br>Note that subtle (or not so subtle) use of the individual&nbsp;<em>Resonance</em>&nbsp;controls is the key to creating unique "talking" filter effects (along with cutoff frequency CV mod).</p><p><strong>Pk1 Res CV, Pk2&nbsp; Res CV, LPF Res CV mod inputs/attenuators-&nbsp;</strong>Adjusts the depth of resonance modulation. The&nbsp;attenuators allow negative or positive CV control of resonance level. The center setting correlates to no modulation.&nbsp;&nbsp;<br></p>'
template: documentation
seo:
  description: 'The Cherry Audio Chorus module is a great sounding and flexible stereo chorus effect featuring CV control of delay time, feedback level, and wet/dry mix.'
  image: /assets/social-modules/chorus.png
fieldset: documentation
id: d346b7fc-54a9-4d3d-adc3-748f69e63cd9
