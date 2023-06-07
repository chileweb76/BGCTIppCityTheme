wp.blocks.registerBlockType("ourblocktheme/blogindex", {
    title: "BGCTippCity Blog Index",
    edit: function () {
      return wp.element.createElement("div", { className: "placeholder" }, "Blog Index Placeholder")
    },
    save: function () {
      return null
    }
  })