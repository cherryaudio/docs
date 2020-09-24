---
title: Phaser
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - phaser.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Cherry Audio Phaser module is a four-stage phaser audio effect featuring voltage-controlled rate and individual on/off switching for each stage. The stages of this module are made from four notch filters instead of typical all-pass filters creating a unique type of phaser effect.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Inputs, Outputs, and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'L(M) and R Input jacks'
      -
        type: text
        text: '- These are the mono or stereo audio input jacks. When using a mono input signal, patching it to the '
      -
        type: text
        marks:
          -
            type: italic
        text: L(Mono)
      -
        type: text
        text: ' jack will feed the signal to both sides of the stereo effect. This is a true stereo effect unit with each side having its own phaser effect. The internal LFOs that modulate the frequency of the left and right notch filters are 180° out of phase with each other to create a sweeping motion from left to right.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Stages
      -
        type: text
        text: '- These buttons engage each of the independent notch filters that make up the phaser effect. Each of the four notch filters modulates through a different range of frequencies with stage one being the lowest and stage four the highest.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Rate Mod jack and attenuator'
      -
        type: text
        text: '- CV input jack and attenuator for externally controlling the '
      -
        type: text
        marks:
          -
            type: italic
        text: Rate
      -
        type: text
        marks:
          -
            type: italic
        text: .
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Rate
      -
        type: text
        text: '- Adjusts the rate, from .02Hz to 10Hz, at which the notch filters frequencies are modulated by the internal LFO.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Feedback
      -
        type: text
        text: "- Adjusts how much of the filtered signal is sent back to the input of the effect.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'L and R Output jacks'
      -
        type: text
        text: "- These are the module's stereo output jacks.\_"
template: modules
seo:
  description: 'The Cherry Audio Phaser module is a four-stage phaser audio effect featuring voltage-controlled rate and individual on/off switching for each stage.'
  image: /assets/social-modules/phaser.png
slug: phaser
blueprint: modules
categories: effects
updated_at: 1593214713
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: e4ea8f27-de03-4dd9-833b-70c4be3f7057
---
