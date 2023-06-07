wp.blocks.registerBlockType("ourblocktheme/header", {
    title: "BGCTippCity Header",
    edit: function () {
      return wp.element.createElement("div", { className: "placeholder" }, "Header Placeholder")
    },
    save: function () {
      return null
    }
  })