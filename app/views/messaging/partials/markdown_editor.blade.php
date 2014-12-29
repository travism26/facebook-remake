var Showdown = require('showdown');
var converter = new Showdown.converter();

var MarkdownEditor = React.createClass({displayName: "MarkdownEditor",
    getInitialState: function() {
        return {value: 'Type some *markdown* here!'};
    },
    handleChange: function() {
        this.setState({value: this.refs.textarea.getDOMNode().value});
    },
    render: function() {
        return (
            React.createElement("div", {className: "MarkdownEditor"},
                React.createElement("h3", null, "Input"),
                React.createElement("textarea", {
                    onChange: this.handleChange,
                    ref: "textarea",
                    defaultValue: this.state.value}),
                React.createElement("h3", null, "Output"),
                React.createElement("div", {
                        className: "content",
                        dangerouslySetInnerHTML: {
                            __html: converter.makeHtml(this.state.value)
                        }}
                )
            )
        );
    }
});

React.render(React.createElement(MarkdownEditor, null), document.getElementById('markdown'));