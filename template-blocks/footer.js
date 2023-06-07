wp.blocks.registerBlockType("ourblocktheme/footer", {
    title: "BGCTippCity Footer",
    edit: function () {
      return wp.element.createElement("div", { className: "placeholder" }, "Footer Placeholder")
    },
    save: function () {
      return null
    }
  })